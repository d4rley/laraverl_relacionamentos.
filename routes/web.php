<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\PolymorphicsController;


// Rotas Ultilizando one to one
Route::get('/one-to-one', [OneToOneController::class,'oneToOne'])->name('one_to_one');
Route::get('/one-to-one-inverse', [OneToOneController::class,'oneToOneinverse'])->name('one_to_one_inverse');
Route::get('/one-to-one-insert', [OneToOneController::class,'oneToOneinsert'])->name('one_to_one-inserte');
//Rotas ultilizando one to many ou inversa causa
Route::get('/one-to-many', [OneToManyController::class, 'oneToMany'])->name('one-to-many');
Route::get('/many-to-one', [OneToManyController::class, 'ManyToOne'])->name('many-to-one');
Route::get('/one-to-many-two', [OneToManyController::class, 'oneToManyTwo'])->name('one-to-many-two');
Route::get('/one-to-many-insert', [OneToManyController::class, 'oneToManyInsert'])->name('one-to-many-insert');
//Rota ultilizando has many
Route::get('/has-many-through', [OneToManyController::class, 'hasManyThrough'])->name('has-many-through');
//Rotas ultilizando many to many
Route::get('/many-to-many', [ManyToManyController::class,'ManyToMany']);
Route::get('/many-to-many-inverse', [ManyToManyController::class, 'ManyToManyInverse']);
Route::get('/many-to-many-insert', [ManyToManyController::class, 'ManyToManyInsert']);
//Rotas ultilizndo Polimorfismo 
Route::get('polymorphics',[PolymorphicsController::class, 'polymorphic']);
Route::get('polymorphics-insert',[PolymorphicsController::class, 'polymorphicInsert']);

Route::get('/', function () {
    return view('welcome');
});
