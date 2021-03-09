<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [ 'taxes', 'status', 'comment']; 
   // protected $guarded=[];
    use HasFactory;

//   RELACION MUCHOS A MUCHOS
    public function products(){
        return $this->belongsToMany(product::class);
    }
}
