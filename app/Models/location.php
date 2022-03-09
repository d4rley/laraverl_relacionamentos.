<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{   
    protected $fillable =['latitude','longitude'];
    use HasFactory;
    public function country(){
        return $this->belongsTo(country::class);
    }
}
