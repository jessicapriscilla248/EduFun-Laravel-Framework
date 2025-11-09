<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['nama'];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
