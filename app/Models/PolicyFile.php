<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyFile extends Model
{
    use HasFactory;
    protected $table = 'policy_files'; // The name of the table in the database

    protected $fillable = ['filename', 'file_contents','file_path','file_name'];

}
