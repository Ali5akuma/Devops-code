<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'name',
        'father_name',
        'dob',
        'gender',
        'address',
    ];
}
