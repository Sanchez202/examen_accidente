<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;
    //relacion muchos a muchos
    public function vehiculo (){
        return $this->belongsToMany('App\Models\vehiculo');
        }
}
