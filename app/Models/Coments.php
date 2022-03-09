<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coments extends Model
{
    protected $fillable=['description'];
    use HasFactory;
    public function commentable(){
        return $this->morphTo();
    }
}
