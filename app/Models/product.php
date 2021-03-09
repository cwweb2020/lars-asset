<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded=[];
    use HasFactory;

    //   RELACION MUCHOS A MUCHOS

    public function orders(){
        return $this->belongsToMany(order::class);
    }
}

