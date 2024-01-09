<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyFilesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('policy_files', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->longBlob('file_contents'); 
            $table->string('file_path')->nullable();// You can use 'text' instead of 'binary' if you prefer
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_files');
    }
};
