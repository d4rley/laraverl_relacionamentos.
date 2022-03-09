<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=['name','initials'];

    use HasFactory;
    public function country(){
        return $this->belongsTo(country::class);
    }
    public function cities (){
        return $this->hasMany(City::class);
    }
}
