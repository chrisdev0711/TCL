<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hire extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'contact_id',
        'tanker_id',
        'uuid',
        'order_num',
        'contract_num',
        'start_date',
        'end_date',
        'delivery_date',
        'mot_expiry',
        'adr_expiry',
        'service_interval',
        'discharge_pump',
        'hire_type',
        'hire_rate',
        'monthly_rate',
        'deposit',
        'minimum_hire_period',
        'notice_period',
        'maintenance_included',
        'tyres_included',
        'delivery_charge',
        'collection_charge',
        'water_fill_charge',
        'tyre_wear_charge',
        'commissioning_charge',
        'cleaning_outside_charge',
        'cleanout_charge',
        'other_charge',
        'charge_notes',
        'delivery_address',
        'delivery_postcode',
        'delivery_phone',
        'delivery_email',
        'delivery_fax',
        'delivery_contact_name',
        'insurer',
        'policy_num',
        'broker',
        'policy_type',
        'policy_expiry',
        'policy_value',
        'policy_notes',
        'hirer_name',
        'hirer_position',
        'hirer_behalf',
        'hirer_signature',
        'hirer_sign_date',
        'hirer_ip',
        'hirer_geo',
        'tcl_name',
        'tcl_position',
        'tcl_behalf',
        'tcl_signature',
        'tcl_sign_date',
        'link',
        'uuid',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'delivery_date' => 'date',
        'maintenance_included' => 'boolean',
        'tyres_included' => 'boolean',
        'policy_expiry' => 'date',
        'hirer_sign_date' => 'date',
        'tcl_sign_date' => 'date',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function tanker()
    {
        return $this->belongsTo(Tanker::class);
    }

    public function checkListsNRs()
    {
        return $this->hasMany(CheckListNr::class);
    }

    public function checkListRigids()
    {
        return $this->hasMany(CheckListRigid::class);
    }

    public function checkListsMilks()
    {
        return $this->hasMany(CheckListMilk::class);
    }

    public function checkListsFoods()
    {
        return $this->hasMany(CheckListFood::class);
    }

    public function checkListsVacuums()
    {
        return $this->hasMany(CheckListVacuum::class);
    }

    public function checkListsWastes()
    {
        return $this->hasMany(CheckListWaste::class);
    }

    public function checkListsPetrols()
    {
        return $this->hasMany(CheckListPetrol::class);
    }
    public function getHires($search) {
    
        return $this->join('contacts', 'contacts.id', '=', 'hires.contact_id')  
        ->join('companies', 'companies.id', '=', 'contacts.company_id')
        ->join('tankers', 'tankers.id', '=', 'hires.tanker_id')    
        ->where(function ($query)use ($search) {
            $query->orWhere('hires.contract_num', 'like', '%'.$search.'%')                    
                  ->orWhere('hires.start_date', 'like', '%'.$search.'%')
                  ->orWhere('hires.end_date', 'like', '%'.$search.'%')
                  ->orWhere('companies.company', 'like', '%'.$search.'%')
                  ->orWhere('contacts.contact', 'like', '%'.$search.'%')
                  ->orWhere('tankers.fleet_num', 'like', '%'.$search.'%');
        })
        ->select('hires.*', 'companies.company', 'contacts.contact')
        ->orderByDesc('hires.updated_at')
        ->paginate(20);;
    }
}
