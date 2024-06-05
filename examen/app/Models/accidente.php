<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidente extends Model
{
    //relacion de uno a muchos
    use HasFactory;
    public function persona(){
        return $this->hasMany('App\Models\persona');
    }
}
