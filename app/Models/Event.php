<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'title',
        'start',
       
        'description',
        'client_id',
        'employee_id',
        
    ];
}
