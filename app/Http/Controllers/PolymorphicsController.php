<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\country;
use App\Models\Coments;

class PolymorphicsController extends Controller
{
    public function polymorphic(){
        $city=City::where('name','São Paulo')->get()->first();
        echo $city->name;
        $comments=$city->comments()->get();

        foreach ($comments as $comment){
            echo "<br> {$comment->description}";
        }
    }
    public function polymorphicInsert(){
        $city=City::where('name','São Paulo')->get()->first();
        echo $city->name;
        $comment =$city->comments()->create([
            'description' =>"new coment {$city->name}"
        ]);  
        var_dump($comment);
    }
}
