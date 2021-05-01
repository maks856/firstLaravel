<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function themes(){
        $this->belongsToMany('App\BetweenModel', 'users_models');
    }
}
