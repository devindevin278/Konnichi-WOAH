<?php

namespace App\Models;

use App\Models\Point;
use App\Models\Notebook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function points() {
        return $this->hasMany(Point::class);
    }

    public function notebooks() {
        return $this->hasMany(Notebook::class);
    }
}
