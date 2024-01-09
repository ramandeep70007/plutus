<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Assuming you have a foreign key to the users table
            $table->string('password');

            $table->string('phone')->nullable();
            $table->string('email')->unique();
            
          
            $table->string('role')->nullable();
            $table->string('name')->nullable();
            $table->string('plan_type')->nullable();
            
            $table->string('brand_name')->nullable();
            $table->string('client_correspondence_address')->nullable();
            $table->string('client_registered_office_address')->nullable();
            $table->string('authorised_signatory_name')->nullable();
           

            $table->string('personal_email_id')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('immediate_reporting_manager')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('correspondence_address_employee')->nullable();
            $table->string('permanent_address_employee')->nullable();
            $table->string('aadhar_number_employee')->nullable();
                $table->string('gst_document')->nullable();
            $table->string('pan_document')->nullable();
            $table->string('tan_document')->nullable();
            $table->string('address_proof_document')->nullable();
            $table->string('appointment_letter')->nullable();
            $table->string('increment_letter')->nullable();
            $table->string('kra_docs')->nullable();
            $table->string('policy_manuals')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
