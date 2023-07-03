<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUnitProgress extends Model
{
    use HasFactory;

    public $table = 'student_unit_progress';
    public $guarded = ['id'];
}
