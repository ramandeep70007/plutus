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
        Schema::create('employee_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('GSTIN')->nullable();
            $table->string('CompanyName')->nullable();
            $table->string('MailofSPOC')->nullable();
            $table->string('SPOCforPlutus')->nullable();
            $table->string('CIN')->nullable();
            $table->string('Noofdirectors')->nullable();
            $table->string('PAN')->nullable();
            $table->string('TAN')->nullable();
            $table->string('GSTIN2')->nullable();
            $table->string('RegisteredAddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_profiles');
    }
};
