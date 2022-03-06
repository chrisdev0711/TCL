<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Tanker;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function($view) {
            
            $contacts_data = Contact::join('companies', 'contacts.company_id', '=', 'companies.id')
            ->select('companies.*','contacts.*') 
            ->orderByDesc('contacts.contact')
            ->paginate(20);
            $i=0;
            $contacts = [];
            foreach($contacts_data as $contact1){
                $contacts[$i]['company']=$contact1['company'];
                $contacts[$i]['address']=$contact1['address'];
                $contacts[$i]['contact']=$contact1['contact'];
                $contacts[$i]['email']=$contact1['email'];
                $contacts[$i]['phone']=$contact1['phone'];
                $contacts[$i]['mobile']=$contact1['mobile'];                
                $contacts[$i]['insurer']=$contact1['insurer'];
                $contacts[$i]['policy_num']=$contact1['policy_num'];
                $contacts[$i]['broker']=$contact1['broker'];
                $contacts[$i]['policy_type']=$contact1['policy_type'];
                $contacts[$i]['policy_expiry']=$contact1['policy_expiry'];
                $contacts[$i]['policy_value']=$contact1['policy_value'];
                $contacts[$i]['policy_notes']=$contact1['policy_notes'];
                $i++;
            }
            $companies_list = Company::all();
            $tanker_list = Tanker::all();
        
            View::share('contact_list', $contacts);
            View::share('companies_list', $companies_list);
            View::share('tanker_list', $tanker_list);
        });
    }
}
