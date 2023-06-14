<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPointProgress extends Model
{
    use HasFactory;

    public $table = 'student_point_progresss';

    public $guarded = ['id'];
}
