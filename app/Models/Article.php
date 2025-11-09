<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable =['course_id','writer_id', 'judul','rangkuman','konten'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
}
