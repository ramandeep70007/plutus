<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id', // Add 'client_id' to the fillable array
        'Nonclient',
        'directorname',
        'din_number',
        'valid_from',
        'valid_till',
        'expiry_status',
        'renewal',
        'mobile_no',
        'email',
        'father_name',
        'pan_file_path',
        'aadhar_file_path',
        'profile_file_path',
         'dsc_location',
    ];
}
