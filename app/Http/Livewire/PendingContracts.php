<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hire;

class PendingContracts extends Component
{
    public $fleets = null;

    
    public function __construct()
    {
    }


    public function render()
    {
        $this->fleets = Hire::join('contacts', 'contacts.id', '=', 'hires.contact_id')  
        ->join('companies', 'companies.id', '=', 'contacts.company_id')
        ->select('hires.hirer_name', 'companies.company', 'hires.id')        
        ->where('status', 'pending')->orderBy("start_date",'desc')->get();
        return view('livewire.pending-contracts');
    }
}
