<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage() {

        $imagePath = ($this -> image) ?  $this->image : 'profile/xe2eFZBJZU5tXgtcQR7TD3eEVljEpeVpAznFDpY6.jpeg';
        return '/storage/' . $imagePath;
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
