<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country;
use App\Models\State;


class OneToManyController extends Controller
{
    public function oneToMany(){
        $keysearch='a';
        $countries=country::where('name','LIKE','%'.$keysearch.'%')->get();
        
        //dd ($countries);
        //$country=country::where('name','brasil')->get()->first();
        foreach($countries as $country){
            echo '<hr>';
            echo "<b>{$country->name}</b>";
            echo '<hr>';

            
            $states = $country->state()->get();

            foreach($states as $state){
                echo"<br> {$state->initials}-{$state->name}";
                
            }
        }
        echo '<hr>';        
    }
    public function ManyToOne(){
        $stateName='São Paulo';
        $state=State::where('name',$stateName)->get()->first();
        echo "<b>{$state->name}</b>";

        $country=$state->country;
        echo "País:{$country->name}";
    }
    public function oneToManyTwo(){
        $keysearch='a';
        $countries=country::where('name','LIKE','%'.$keysearch.'%')->get();
        
        //dd ($countries);
        //$country=country::where('name','brasil')->get()->first();
        foreach($countries as $country){
            echo '<hr>';
            echo "<b>{$country->name}</b>";
            echo '<hr>';

            
            $states = $country->state()->get();

            foreach($states as $state){
                echo"<br> {$state->initials}-{$state->name}:";
                //dd($state);
                foreach ($state->cities as $city){
                    echo " {$city->name}, ";
            }
            }
        }
        echo '<hr>';        
    }
    public function oneToManyInsert(){
        $dataForm=[
            'name'=>'Bahia',
            'initials'=>'BA',
        ];
        
        $country=country::find(1);
        $insertstate=$country->State()->create($dataForm);
        var_dump($insertstate);

    }
    public function hasManyThrough(){
        $country=country::find(1);
        echo "<b>{$country->name}: </b>";
        $cities=$country->cities;

        foreach($cities as $city){
            echo " {$city->name}, ";
        }
    }
}
