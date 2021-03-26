<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps=false;

    public function designer()
    {
        //Get the designer that owns the character.
        return $this->belongsTo(Designer::class);
    }
}
