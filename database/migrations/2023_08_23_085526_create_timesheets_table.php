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
    Schema::create('timesheets', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('client_id');
        $table->text('spenttime');
        $table->text('timesheet_txt'); // Store text data
        $table->unsignedBigInteger('employee_id');
        $table->text('date_of_work');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
