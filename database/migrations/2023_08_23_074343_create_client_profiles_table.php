<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('client_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('gst_document');
            $table->string('pan_document');
            $table->string('tan_document');
            $table->string('address_proof_document');
            $table->string('brand_name');
            $table->string('client_correspondence_address');
            $table->string('client_registered_office_address');
            $table->date('tenure_start_date');
            $table->date('tenure_end_date');
            $table->string('authorised_signatory_name');
            $table->string('authorised_signatory_contact_no');
            $table->string('authorised_signatory_email_id');
            
            $table->string('employee_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_profiles');
    }
};
