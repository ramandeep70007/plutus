<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $table = 'issues'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'client_id',
        'issue_date',
        'responsibility',
        'area',
        'particulars',
        'status',
        'remarks',
        'employee_id',
        'employee_name',
        'client_name',
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'employee_id');
}
}
