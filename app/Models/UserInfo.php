<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'email',
        'password',
        'role',
        'name',
        'plan_type',
        
        'brand_name',
        'client_correspondence_address',
        'client_registered_office_address',
        'authorised_signatory_name',
       
        'personal_email_id',
        'designation',
        'department',
        'joining_date',
        'immediate_reporting_manager',
        'profile_picture',
        'correspondence_address_employee',
        'permanent_address_employee',
        'aadhar_number_employee',
        'appointment_letter',
        'increment_letter',
        'kra_docs',
        'policy_manuals',
        'gst_document',
        'pan_document',
        'tan_document',
        'address_proof_document'
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
