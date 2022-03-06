<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'company_id',
        'email',
        'contact',
        'phone',
        'mobile'
    ];
    protected $table = 'contacts';

    protected $connection = 'mysql';

     public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    public function getBySearch($search) {
        $companies = $this->rightJoin('companies', 'contacts.company_id', '=', 'companies.id')
        ->where(function ($query)use ($search) {
            $query->orWhere('companies.company', 'like', '%'.$search.'%')                    
                  ->orWhere('companies.address', 'like', '%'.$search.'%')
                  ->orWhere('contacts.email', 'like', '%'.$search.'%');
        })
        ->select('companies.company','companies.address',
        'companies.postcode','companies.id AS company_id', 
        'contacts.id', 'contacts.contact', 'contacts.email', 'contacts.phone', 'contacts.mobile')
        ->orderByDesc('contacts.contact')
        ->paginate(20);
        return $companies;
    }
    
    public function getContactByCompanyId($company_id)
    {
        $contact = $this->join('companies', 'contacts.company_id', '=', 'companies.id')
        ->select('companies.company','companies.address','companies.postcode', 'contacts.*')
        ->where('contacts.company_id', '=', $company_id)  
        ->orderByDesc('contacts.contact')
        ->paginate(20);
        return $contact;
    }
    public function getContactById($id)
    {
        $contact = $this->join('companies', 'contacts.company_id', '=', 'companies.id')
        ->select('companies.company','companies.address','companies.postcode', 'contacts.*')
        ->where('contacts.id', '=', $id)  
        ->first();
        return $contact;
    }   
}