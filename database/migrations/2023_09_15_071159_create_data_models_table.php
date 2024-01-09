<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataModelsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('Nonclient');
            $table->string('directorname');
            $table->string('din_number');
            $table->date('valid_from');
            $table->date('valid_till');
            $table->string('expiry_status');
            $table->string('renewal');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('father_name');
            $table->string('pan_file_path'); // Store file paths, not the actual files
        $table->string('aadhar_file_path');
        $table->string('profile_file_path');
        $table->string('dsc_location');
            $table->timestamps();
    
            // Define foreign key constraint
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_models');
    }
}
