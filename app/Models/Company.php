<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\Searchable;

class Company extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'id',
        'company',
        'address',
        'postcode',
        'insurer',
        'policy_num',
        'broker',
        'policy_type',
        'policy_expiry',
        'policy_notes'
    ];
    protected $table = 'companies';
    
    protected $searchableFields = ['*'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function contact()
    {
        return $this->hasMany(Contact::class, 'company_id');
    }

}
