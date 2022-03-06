<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Tanker;
use App\Models\CheckListNr;
use App\Http\Requests\CheckListNrStoreRequest;
use App\Http\Requests\CheckListNrUpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Datetime;
use Illuminate\Http\Request;
use Response;

class CheckListNrController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', CheckListNr::class);

        $search = $request->get('search', '');

        $checkListNRs = CheckListNr::search($search)
            ->latest()
            ->paginate(20);

        return view(
            'app.check_list_n_rs.index',
            compact('checkListNRs', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', CheckListNr::class);
        $hire_id = $request->hire_id;
        $hire = Hire::find($hire_id);
        $check_type = $request->check_list_type;
        session(['hire_id' => $hire_id]);
        session(['check_type' => $check_type]);
        return view('app.check_list_n_rs.create', compact('hire', 'check_type'));
    }

    public function validateCheckboxes($request, $validated) {
        $validated['cladding_panels'] = isset($request->cladding_panels) ? $request->cladding_panels == 'on' ? true : false : false;
        $validated['handrail_ladder'] = isset($request->handrail_ladder) ? $request->handrail_ladder == 'on' ? true : false : false;
        $validated['compartment_internal'] = isset($request->compartment_internal) ? $request->compartment_internal == 'on' ? true : false : false;
        $validated['side_guards'] = isset($request->side_guards) ? $request->side_guards == 'on' ? true : false : false;
        $validated['rear_bumper'] = isset($request->rear_bumper) ? $request->rear_bumper == 'on' ? true : false : false;
        $validated['wings_stays'] = isset($request->wings_stays) ? $request->wings_stays == 'on' ? true : false : false;
        $validated['lights'] = isset($request->lights) ? $request->lights == 'on' ? true : false : false;
        $validated['engine'] = isset($request->engine) ? $request->engine == 'on' ? true : false : false;
        $validated['vacuum_pump'] = isset($request->vacuum_pump) ? $request->vacuum_pump == 'on' ? true : false : false;
        $validated['dipstrick'] = isset($request->dipstrick) ? $request->dipstrick == 'on' ? true : false : false;
        $validated['valve_operation'] = isset($request->valve_operation) ? $request->valve_operation == 'on' ? true : false : false;
        $validated['fire_extinguisher'] = isset($request->fire_extinguisher) ? $request->fire_extinguisher == 'on' ? true : false : false;
        $validated['chassis'] = isset($request->chassis) ? $request->chassis == 'on' ? true : false : false;

        $validated['cleaning_check'] = isset($request->cleaning_check) ? $request->cleaning_check == 'on' ? true : false : false;
        return $validated;
    }

    public function sendMail($checkList) {
        $details = [
            'hirer_name' => $checkList->hirer_name,
            'link_url' => route('checklist_nr_link', ['uuid' => $checkList->uuid])
        ];
        $email_address = $checkList->hire->company->email;
        // \Mail::to("italexx.ua@gmail.com")->send(new \App\Mail\SendCheckListNrMail($details));
        \Mail::to($email_address)->send(new \App\Mail\SendCheckListNrMail($details));
    }
    
    /**
     * @param \App\Http\Requests\CheckListNrStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckListNrStoreRequest $request)
    {
        $this->authorize('create', CheckListNr::class);
        $validated = $request->validated();

        $validated = $this->validateCheckboxes($request, $validated);
        $validated['uuid'] = Str::uuid();
        $validated['hire_id'] = session('hire_id');

        $validated['ext_splat_right'] = str_replace(env('APP_URL'), '', $validated['ext_splat_right']);
        $validated['ext_splat_left'] = str_replace(env('APP_URL'), '', $validated['ext_splat_left']);
        $validated['ext_splat_rear'] = str_replace(env('APP_URL'), '', $validated['ext_splat_rear']);
        $validated['ext_splat_front'] = str_replace(env('APP_URL'), '', $validated['ext_splat_front']);
        $validated['int_splat'] = str_replace(env('APP_URL'), '', $validated['int_splat']);
        
        $validated['int_video'] = str_replace(env('APP_URL'), '', $validated['int_video']);
        $validated['ext_video'] = str_replace(env('APP_URL'), '', $validated['ext_video']);
        
        $validated['hirer_signature'] = str_replace(env('APP_URL'), '', $validated['hirer_signature']);
        $validated['tcl_signature'] = str_replace(env('APP_URL'), '', $validated['tcl_signature']);
        $validated['supervisor_signature'] = str_replace(env('APP_URL'), '', $validated['supervisor_signature']);

        if($request->hasFile('cleaning_status')) {            
            $image = $request->file('cleaning_status');            
            $date = new DateTime();
            $new_image_name = $date->getTimestamp();                                    
            $file_name = $new_image_name.'.'.$image->guessExtension();                        
            $path = $image->storeAs(
                'public/uploads/cleaning_status', $file_name
            );                
            $url = '/storage/uploads/cleaning_status/'.$file_name;            
            $validated['cleaning_status'] = $url;
        }

        $checkListNr = CheckListNr::create($validated);
        $checkListNr->supervisor_signature = $request->supervisor_signature;
        $checkListNr->save();
        $hire = null;
        if($request->hirer_signature != "/img/sign.png" && $request->tcl_signature != "/img/sign.png" ) {
            $checkListNr->status = "signed";
            $checkListNr->update($validated);
            $hire = Hire::find($checkListNr->hire_id);
            if($checkListNr->checklist_type == "On") {
                $hire->status = "onHire";
            }
            if($checkListNr->checklist_type == "Off") {
                $hire->status = "offHire";
                
                $tanker = Tanker::find($hire->tanker_id);
                $tanker->usage = false;
                $tanker->save();
            }
            $hire->save();                    
            
            $this->sendMail($checkListNr);

            return redirect()->route('hires.index')->withSuccess(__('crud.common.created'));
        }
        
        if(!$hire)
        {
            $hire_id = session('hire_id');
            $hire = Hire::find($hire_id);
        }
        $tanker = $hire->tanker;
        $tanker->ext_splat_left = $validated['ext_splat_left'];
        $tanker->ext_splat_front = $validated['ext_splat_front'];
        $tanker->ext_splat_rear = $validated['ext_splat_rear'];
        $tanker->ext_splat_right = $validated['ext_splat_right'];
        $tanker->int_splat = $validated['int_splat'];
        $tanker->save();
        
        return redirect()
        ->route('check-list-n-rs.edit', $checkListNr)
        ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CheckListNr $checkListNr
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CheckListNr $checkListNr)
    {
        $this->authorize('view', $checkListNr);

        return view('app.check_list_n_rs.show', compact('checkListNr'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CheckListNr $checkListNr
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
        $checkListNr = CheckListNr::find($id);
        $this->authorize('update', $checkListNr);
        $hires = Hire::pluck('start_date', 'id');
        
        $check_type = $checkListNr->checklist_type;        
        $hire = $checkListNr->hire;
        return view(
            'app.check_list_n_rs.edit',
            compact('checkListNr', 'hire', 'check_type')
        );        
    }



    /**
     * @param \App\Http\Requests\CheckListNrUpdateRequest $request
     * @param \App\Models\CheckListNr $checkListNr
     * @return \Illuminate\Http\Response
    */
    public function update(
        CheckListNrUpdateRequest $request,
        $id
    ) {                
        $checkListNr = CheckListNr::find($id);
        $this->authorize('update', $checkListNr);
        $checkListNr->supervisor_signature = $request->supervisor_signature;
        $checkListNr->save();
        $validated = $request->validated();
        $validated = $this->validateCheckboxes($request, $validated);

        $validated['ext_splat_right'] = str_replace(env('APP_URL'), '', $validated['ext_splat_right']);
        $validated['ext_splat_left'] = str_replace(env('APP_URL'), '', $validated['ext_splat_left']);
        $validated['ext_splat_rear'] = str_replace(env('APP_URL'), '', $validated['ext_splat_rear']);
        $validated['ext_splat_front'] = str_replace(env('APP_URL'), '', $validated['ext_splat_front']);
        $validated['int_splat'] = str_replace(env('APP_URL'), '', $validated['int_splat']);
        
        $validated['int_video'] = str_replace(env('APP_URL'), '', $validated['int_video']);
        $validated['ext_video'] = str_replace(env('APP_URL'), '', $validated['ext_video']);
        
        $validated['hirer_signature'] = str_replace(env('APP_URL'), '', $validated['hirer_signature']);
        $validated['tcl_signature'] = str_replace(env('APP_URL'), '', $validated['tcl_signature']);
        $validated['supervisor_signature'] = str_replace(env('APP_URL'), '', $validated['supervisor_signature']);        

        if($request->hasFile('cleaning_status')) {
            if($checkListNr->cleaning_status != '') {
                $file = 'public/' . $checkListNr->cleaning_status;
                if(Storage::exists($file)) {                    
                        Storage::delete($file);                    
                }
            }
            $image = $request->file('cleaning_status');            
            $date = new DateTime();
            $new_image_name = $date->getTimestamp();                                    
            $file_name = $new_image_name.'.'.$image->guessExtension();                        
            $path = $image->storeAs(
                'public/uploads/cleaning_status', $file_name
            );                
            $url = '/storage/uploads/cleaning_status/'.$file_name;            
            $validated['cleaning_status'] = $url;
        } 
        
        $hire = Hire::find($checkListNr->hire_id);              
        if($request->hirer_signature != "/img/sign.png" && $request->tcl_signature != "/img/sign.png" ) {
            $checkListNr->status = "signed";
            $checkListNr->update($validated);                        
            if($checkListNr->checklist_type == "On" && $hire->status == 'signed') {
                $hire->status = "onHire";
            }
            if($checkListNr->checklist_type == "Off") {
                $hire->status = "offHire";

                $tanker = Tanker::find($hire->tanker_id);
                $tanker->usage = false;
                $tanker->save();
            }            
            $hire->save();
            $this->sendMail($checkListNr);
            return redirect()->route('hires.index')->withSuccess(__('crud.common.created'));
        }
        $checkListNr->update($validated); 
        
        $tanker = $hire->tanker;
        $tanker->ext_splat_left = $validated['ext_splat_left'];
        $tanker->ext_splat_front = $validated['ext_splat_front'];
        $tanker->ext_splat_rear = $validated['ext_splat_rear'];
        $tanker->ext_splat_right = $validated['ext_splat_right'];
        $tanker->int_splat = $validated['int_splat'];
        $tanker->save();

        return redirect()
            ->route('check-list-n-rs.edit', $checkListNr)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CheckListNr $checkListNr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CheckListNr $checkListNr)
    {
        $this->authorize('delete', $checkListNr);

        $checkListNr->delete();

        return redirect()
            ->route('check-list-n-rs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
