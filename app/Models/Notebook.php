<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Bubblechat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notebook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function chats() {
        return $this->hasMany(Bubblechat::class);
    }
}
