<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempProgress extends Model
{
    use HasFactory;

    public $table = 'temp_progress';

    public $guarded = ['id'];

}
