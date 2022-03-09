<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;

class country extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    public function location(){
        return $this->hasOne(location::class);
    }
    public function state(){
        return $this->hasMany(State::class);
    }
    public function cities(){
        return $this->hasManyThrough(City::class, State::class);
    }
}
