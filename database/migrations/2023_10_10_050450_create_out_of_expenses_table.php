<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutOfExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('out_of_expenses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('amount', 10, 2); // Assuming 10 total digits with 2 decimal places
            $table->string('reason');
            $table->string('status');
            $table->string('remarks');
            $table->unsignedBigInteger('employee_id');
            $table->string('client_id');
            $table->string('category_of_expense');
            $table->string('nature_of_expense');
            $table->string('supporting_documents');
            $table->string('attach_supporting_documents');
            // $table->string('remarks');
            $table->string('date_of_submission_expense');
            $table->string('admin_update');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees'); // Assuming you have an "employees" table
        });
    }

    public function down()
    {
        Schema::dropIfExists('out_of_expenses');
    }
};
