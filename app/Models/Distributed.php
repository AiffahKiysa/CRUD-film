<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributed extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function film(){
        return $this->hasMany(Film::class);
    }
}
