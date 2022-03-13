<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\QrController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TankerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CheckListNrController;
use App\Http\Controllers\CheckListRigidController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ContractController;
use Mail;
use PDF;

class TCLEmailController extends Controller
{
    //
    public function sendHireEmailToCustomer(Request $request) {    
        $hire_id = $request->hire_id;
        $hire = \App\Models\Hire::find($hire_id);
        $attached_docs_url = explode(";", $hire->attached_doc);
        $details = [
            'hirer_name' => $hire->hirer_name,
            'link_url' => route('contract_link', ['uuid' => $hire->uuid]),
            'attached_docs_url' => $attached_docs_url,
            'isUpdatedDocs' => "false",
        ];

        $email_address = $hire->contact->email;
       
        // \Mail::to('italexx.ua@gmail.com')->send(new \App\Mail\SendCustomerMail($details));
        \Mail::to($email_address)->send(new \App\Mail\SendCustomerMail($details));  
        
        return redirect()
                ->route('hires.edit', $hire)
                ->withSuccess(__('crud.common.email'));
    }

    public function sendSignedContractToCustomer(Request $request) {
        $hire_id = $request->hire_id;
        $hire = \App\Models\Hire::find($hire_id);

// Here we should create the PDF and save it somewhere. To keep things simple lets just name the file SignedContractXXX.pdf where XXX is the hire_id.


        $details = [
            'hirer_name' => $hire->hirer_name,
            'signed_contract_url' => 'XXXX', // we need to add the URL to the signed contract PDF here.
        ];

        $email_address = $hire->contact->email;
    
        \Mail::to($email_address)->send(new \App\Mail\SendCustomerContract($details));  
        
        return redirect()
                ->route('hires.edit', $hire)
                ->withSuccess(__('crud.common.email'));
    }


    public function sendCheckListNRMailToCustomer(Request $request) {
        $checklist_id = $request->id;
        $checklist = \App\Models\CheckListNr::find($checklist_id);
        $details = [
            'hirer_name' => $checklist->hire->hirer_name,
            'link_url' => route('checklist_nr_link', ['uuid' => $checklist_id])
        ];
        $email_address = $checklist->hire->contact->email;

        // \Mail::to('italexx.ua@gmail.com')->send(new \App\Mail\SendCheckListNrMail($details));
        \Mail::to($email_address)->send(new \App\Mail\SendCheckListNrMail($details));
        return redirect()->route('check-list-n-rs.edit', $checklist)->withSuccess(_('crud.common.email'));
    }

    public function sendCheckListRigidMailToCustomer(Request $request) {
        $checklist_id = $request->id;
        $checklist = \App\Models\CheckListRigid::find($checklist_id);
        $details = [
            'hirer_name' => $checklist->hire->hirer_name,
            'link_url' => route('checklist_rigid_link', ['uuid' => $checklist_id])
        ];
        $email_address = $checklist->hire->contact->email;

        // \Mail::to('italexx.ua@gmail.com')->send(new \App\Mail\SendCheckListRigidMail($details));
        \Mail::to($email_address)->send(new \App\Mail\SendCheckListRigidMail($details));
        return redirect()->route('check-list-rigids.edit', $checklist)->withSuccess(_('crud.common.email'));
    }
}