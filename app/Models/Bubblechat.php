<?php

namespace App\Models;

use App\Models\Notebook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bubblechat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function notebook() {
        return $this->belongsTo(Notebook::class);
    }
}
