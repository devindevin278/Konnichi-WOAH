<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPageProgress extends Model
{
    use HasFactory;

    public $table = 'student_page_progresss';

    public $guarded = ['id'];
}
