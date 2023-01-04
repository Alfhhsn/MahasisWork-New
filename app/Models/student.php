<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'birthdate',
        'phonenumber',
        'address',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
