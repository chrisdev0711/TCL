<?php

namespace App\Http\Controllers;

use App\Models\Tanker;
use Illuminate\Http\Request;
use App\Http\Requests\TankerStoreRequest;
use App\Http\Requests\TankerUpdateRequest;

class TankerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Tanker::class);
        $archive = false;
        if($request->archive) {
            $archive = true;
        }
        $search = $request->get('search', '');

        $tankers = Tanker::search($search)
            ->where('archive', '=', $archive)
            ->latest()
            ->paginate(20);

        return view('app.tankers.index', compact('tankers', 'search', 'archive'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Tanker::class);
        $tanker = null;
        return view('app.tankers.create', ['tanker' => $tanker]);
    }

    public function splat_side2_initializer($tanker_type)
    {
        $src = "./img/splat-side-2".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-side-2'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_side1_initializer($tanker_type)
    {
        $src = "./img/splat-side-1".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-side-1'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_rear_initializer($tanker_type)
    {
        $src = "./img/splat-rear".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-rear'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_front_initializer($tanker_type)
    {
        $src = "./img/splat-side-front".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-side-front'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    public function splat_internal_initializer($tanker_type)
    {
        $src = "./img/splat-internal".$tanker_type.".png";  // source folder or file
        $dest = './storage/uploads/trunkStates/'.time().'_splat-internal'.$tanker_type.'.png';
        copy($src, $dest);
        $dest = str_replace('./','/',$dest);
        return $dest;
    }
    /**
     * @param \App\Http\Requests\TankerStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TankerStoreRequest $request)
    {
        $this->authorize('create', Tanker::class);
        $validated = $request->validated();
        $tanker = Tanker::create($validated);
        if($tanker->type == "Rigid")
        {            
            $tanker->ext_splat_right = $this->splat_side2_initializer('');
            $tanker->ext_splat_left = $this->splat_side1_initializer('');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('');                                                
            $tanker->int_splat = $this->splat_internal_initializer('');
        }
        else if($tanker->type == "Non-Rigid")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('');
            $tanker->ext_splat_left = $this->splat_side1_initializer('');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('');                                                
            $tanker->int_splat = $this->splat_internal_initializer('');
        }
        else if($tanker->type == "Food")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-food');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-food');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-food');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-food');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-food');            
        }
        else if($tanker->type == "Milk")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-milk');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-milk');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-milk');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-milk');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-milk');            
        }
        else if($tanker->type == "General")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-petrol');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-petrol');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-petrol');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-petrol');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-petrol');            
        }
        else if($tanker->type == "Vacuum")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-vacuum');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-vacuum');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-vacuum');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-vacuum');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-vacuum');            
        }
        else if($tanker->type == "Waste")
        {
            $tanker->ext_splat_right = $this->splat_side2_initializer('-waste');
            $tanker->ext_splat_left = $this->splat_side1_initializer('-waste');
            $tanker->ext_splat_rear = $this->splat_rear_initializer('-waste');                                    
            $tanker->ext_splat_front = $this->splat_front_initializer('-waste');                                                
            $tanker->int_splat = $this->splat_internal_initializer('-waste');            
        }
        $tanker->save();
        return redirect()
            ->route('tankers.edit', $tanker)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tanker $tanker
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tanker $tanker)
    {
        $this->authorize('view', $tanker);

        return view('app.tankers.show', compact('tanker'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tanker $tanker
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Tanker $tanker)
    {
        $this->authorize('update', $tanker);
        return view('app.tankers.edit', compact('tanker'));
    }

    /**
     * @param \App\Http\Requests\TankerUpdateRequest $request
     * @param \App\Models\Tanker $tanker
     * @return \Illuminate\Http\Response
     */
    public function update(TankerUpdateRequest $request, Tanker $tanker)
    {
        $this->authorize('update', $tanker);

        $validated = $request->validated();        

        if(!$request->type)
            $type = $tanker->type;
        else
            $type = $request->type;
        $tanker->update($validated);
        $tanker->type = $type;
        $tanker->ext_splat_right = str_replace(env('APP_URL'),'',$request->ext_splat_right);
        $tanker->ext_splat_left = str_replace(env('APP_URL'),'',$request->ext_splat_left);
        $tanker->ext_splat_rear = str_replace(env('APP_URL'),'',$request->ext_splat_rear);
        $tanker->ext_splat_front = str_replace(env('APP_URL'),'',$request->ext_splat_front);
        $tanker->int_splat = str_replace(env('APP_URL'),'',$request->int_splat);
        $tanker->save();
        return redirect()
            ->route('tankers.edit', $tanker)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tanker $tanker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tanker $tanker)
    {
        $this->authorize('delete', $tanker);

        $tanker->delete();

        return redirect()
            ->route('tankers.index')
            ->withSuccess(__('crud.common.removed'));
    }

    public function archive(Request $request)
    {
        $archive_item = Tanker::find($request->tanker_id);
        if($archive_item) {
            if($archive_item->archive == false) {
                $archive_item->archive = true;
            } else {
                $archive_item->archive = false;
            }
            $archive_item->save();
            echo "success";
        } else {
            echo "fail";
        }
    }

    public function refresh(Request $request) {
        $tanker = Tanker::find($request->tanker_id);
        if($tanker)
        {
            if($tanker->type == "Rigid")
            {            
                $tanker->ext_splat_right = $this->splat_side2_initializer('');
                $tanker->ext_splat_left = $this->splat_side1_initializer('');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('');                                                
                $tanker->int_splat = $this->splat_internal_initializer('');
            }
            else if($tanker->type == "Non-Rigid")
            {
                $tanker->ext_splat_right = $this->splat_side2_initializer('');
                $tanker->ext_splat_left = $this->splat_side1_initializer('');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('');                                                
                $tanker->int_splat = $this->splat_internal_initializer('');
            }
            else if($tanker->type == "Food")
            {
                $tanker->ext_splat_right = $this->splat_side2_initializer('-food');
                $tanker->ext_splat_left = $this->splat_side1_initializer('-food');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('-food');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('-food');                                                
                $tanker->int_splat = $this->splat_internal_initializer('-food');            
            }
            else if($tanker->type == "Milk")
            {
                $tanker->ext_splat_right = $this->splat_side2_initializer('-milk');
                $tanker->ext_splat_left = $this->splat_side1_initializer('-milk');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('-milk');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('-milk');                                                
                $tanker->int_splat = $this->splat_internal_initializer('-milk');            
            }
            else if($tanker->type == "Petrol")
            {
                $tanker->ext_splat_right = $this->splat_side2_initializer('-petrol');
                $tanker->ext_splat_left = $this->splat_side1_initializer('-petrol');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('-petrol');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('-petrol');                                                
                $tanker->int_splat = $this->splat_internal_initializer('-petrol');            
            }
            else if($tanker->type == "Vacuum")
            {
                $tanker->ext_splat_right = $this->splat_side2_initializer('-vacuum');
                $tanker->ext_splat_left = $this->splat_side1_initializer('-vacuum');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('-vacuum');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('-vacuum');                                                
                $tanker->int_splat = $this->splat_internal_initializer('-vacuum');            
            }
            else if($tanker->type == "Waste")
            {
                $tanker->ext_splat_right = $this->splat_side2_initializer('-waste');
                $tanker->ext_splat_left = $this->splat_side1_initializer('-waste');
                $tanker->ext_splat_rear = $this->splat_rear_initializer('-waste');                                    
                $tanker->ext_splat_front = $this->splat_front_initializer('-waste');                                                
                $tanker->int_splat = $this->splat_internal_initializer('-waste');            
            }
            $tanker->save();
            $tanker->ext_splat_right = env('APP_URL').$tanker->ext_splat_right;
            $tanker->ext_splat_left = env('APP_URL').$tanker->ext_splat_left;
            $tanker->ext_splat_rear = env('APP_URL').$tanker->ext_splat_rear;
            $tanker->ext_splat_front = env('APP_URL').$tanker->ext_splat_front;
            $tanker->int_splat = env('APP_URL').$tanker->int_splat;
            return response()->json([
                'tanker_obj' => $tanker,
                'success' => 'success'
            ], 200);
        }
        else
            return response()->json([
                'tanker_obj' => null,
                'success' => 'fail'
            ], 200);
    }    
}
