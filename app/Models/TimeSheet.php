<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSheet extends Model
{
    use HasFactory;
    protected $table = 'timesheets'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'client_id',
        'spenttime',
        'non_client',
        'timesheet_txt',
        'employee_id',
        'date_of_work',
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'employee_id');
}

}
