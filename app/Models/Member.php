<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'student_id',
        'department',
        'batch',
        'location',
        'email'
    ];
}