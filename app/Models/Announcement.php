<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'announcements';

    protected $fillable = [
        'role',
        'announcements_for_clients',
        'announcements_for_employee',
    ];
    
}
