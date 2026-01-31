<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey = 'id_media';

    protected $fillable = [
        'fileName','filePath','type','id_company_profile'
    ];

    public function companyProfile()
    {
        return $this->belongsTo(
            CompanyProfile::class,
            'id_company_profile',
            'id_company_profile'
        );
    }
}

