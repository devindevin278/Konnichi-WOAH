<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class Article extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $with = ['author'];
    public function scopeFilter($query, array $filters){

        $query->when($filters['author'] ?? false, function($query, $author){
                return $query->whereHas('author', function($query) use  ($author){
                $query->where('name', $author);
                });
        });
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable():array{
        return[
            'slug' => [
                'source' => 'title'
            ]
         ];
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
