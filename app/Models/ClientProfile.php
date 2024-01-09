<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
    use HasFactory;
    protected $table = 'client_profiles';

    protected $fillable = [
        'employee_id',
        'client_id',
        'name',
        'phone',
        'email',
        'gst_document',
        'pan_document',
        'tan_document',
        'address_proof_document',
        'brand_name',
        'client_correspondence_address',
        'client_registered_office_address',
        'tenure_start_date',
        'tenure_end_date',
        'authorised_signatory_name',
        'authorised_signatory_contact_no',
        'authorised_signatory_email_id',
        'employee_name',
        
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'employee_id');
}
}
