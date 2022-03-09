<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    use HasFactory;
    //return $this->belongsToMany(Company::class);
    public function Companies(){
        return $this->belongsToMany(Company::class, 'company_city');
    }
    public function comments(){
        return $this->morphMany(Coments::class, 'commentable');
    }
}
