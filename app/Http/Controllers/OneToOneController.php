<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country;
use App\Models\location;

class OneToOneController extends Controller
{
    public function oneToOne(){
        $country= country::findOrFail(2);

        echo $country->name;

        $location= $country->location;
        echo "<hr>Latitude {$location->latitude}";
        echo "<br>Longitude {$location->longitude}";
        
    }
    public function oneToOneinverse(){
        $latitude=456;
        $longitude=654;
        $location= Location::where('latitude',$latitude)->where('longitude',$longitude)->get()->first();

        //echo $location->id;

        $country= $location->country;
        echo $country->name;
    }
    public function oneToOneinsert(){
        $dataForm=[
            'name'=>'Alemanha',
            'latitude'=>890,
            'longitude'=>98,
        ];
        $country=country::create($dataForm);
        // $dataForm['country_id']=$country>id;
        // $location= location::create($dataForm);
        $location=new location;
        $location->latitude= $dataForm['latitude'];
        $location->longitude= $dataForm['longitude'];
        $location->country_id=$country->id;
        $location->save();

    }

}
