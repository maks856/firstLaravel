<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function emails(){
        return $this->hasMany('App\CommentModel');
    }
}
