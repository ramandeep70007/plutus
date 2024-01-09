<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('issues', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('client_id');
        $table->date('issue_date');
        $table->string('responsibility');
        $table->string('area');
        $table->string('particulars');
        $table->string('status');
        $table->text('remarks')->nullable();
        $table->unsignedBigInteger('employee_id');
         $table->string('employee_name');
          $table->string('client_name');
        $table->timestamps();

        // Define foreign key constraints if applicable
        // $table->foreign('client_id')->references('id')->on('clients');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
