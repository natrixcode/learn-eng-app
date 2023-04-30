<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model {

    use HasFactory;

    public function post() {
        return $this->hasOne(Post::class);
       }

    public function countries() {
        return $this->hasMany(Country::class);
    }

    public function category_user_post() {
        return $this->belongsToMany(User::class);
    }
}



?>