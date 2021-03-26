<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    public $timestamps=false;
    
    public function character()
    {
        //ceci permet de relier les designers aux characters
        //Un designer peut creer plusieurs character mais un character ne peut pas avoir plusieurs desugners
        return $this->hasMany(Character::class);
    }
}
