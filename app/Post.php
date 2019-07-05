<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //turn off fillable blocking
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
