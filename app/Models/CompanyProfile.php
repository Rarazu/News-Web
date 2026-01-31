<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $primaryKey = 'id_company_profile';

    protected $fillable = [
        'title','description','contact',
        'address','vision','mission'
    ];

    public function media()
    {
        return $this->hasMany(Media::class, 'id_company_profile', 'id_company_profile');
    }
}

