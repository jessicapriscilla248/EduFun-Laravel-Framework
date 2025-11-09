<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
    protected $table = 'writer';
    // protected $fillable=['nama','spesialis','profilpicture'];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
