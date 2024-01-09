<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutOfExpense extends Model
{
    protected $fillable = ['date', 'amount', 'reason', 'status','remarks', 'employee_id','client_id','category_of_expense','nature_of_expense','supporting_documents','attach_supporting_documents','date_of_submission_expense','admin_update'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
