<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProfile extends Model
{
    use HasFactory;
    protected $table = 'employee_profiles';

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'phone',
        'GSTIN',
        'CompanyName',
        'MailofSPOC',
        'SPOCforPlutus',
        'CIN',
        'Noofdirectors',
        'PAN',
        'TAN',
        'GSTIN2',
        'RegisteredAddress',
        
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'employee_id');
}
}
