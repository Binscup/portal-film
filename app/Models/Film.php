<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    protected $fillable = ['title', 'description', 'year',];

    public function genre()
    {
        return $this->belongsTo('App\Models\genre');
    }
    public function film()
    {
        return $this->hasMany('App\Models\Film');
    }
}
