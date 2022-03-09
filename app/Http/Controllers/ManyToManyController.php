<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function ManyToMany(){
        $city= City::where('name', 'São Paulo')->get()->first();
        echo "<b>{$city->name}</b><br>";
        
        $companies=$city->companies;
        foreach($companies as $company) {    
            //var_dump($company);  
            echo " {$company->name}, ";
        }
    }
    public function ManyToManyInverse(){
        $company=Company::where('name', 'EspecializaTi')->get()->first();

        echo "<b>{$company->name}</b><br>";
        
        $cities=$company->cities;
        foreach($cities as $city) {    
            //var_dump($company);  
            echo " {$city->name}, ";
        }
    }
    public function ManyToManyInsert(){
        
        $dataForm=[3,4,5];
        
        $company=Company::where('name', 'EspecializaTi')->get()->first();
        echo "<b>{$company->name}</b><br>";
        $company->cities()->sync($dataForm);

        $cities=$company->cities;
        foreach($cities as $city) {    
            //var_dump($company);  
            echo " {$city->name}, ";
        }
    }
}
