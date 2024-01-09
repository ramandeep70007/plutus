<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notifications'; // Specify the table name if it's different from the model name

    protected $fillable = [
       
        'user_id',
        'notification',
    ];
}
