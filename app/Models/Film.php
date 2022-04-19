<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Film extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function distributed(){
        return $this->belongsTo(Distributed::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
