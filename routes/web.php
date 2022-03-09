<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\PolymorphicsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/one-to-one', [OneToOneController::class,'oneToOne'])->name('one_to_one');
Route::get('/one-to-one-inverse', [OneToOneController::class,'oneToOneinverse'])->name('one_to_one_inverse');
Route::get('/one-to-one-insert', [OneToOneController::class,'oneToOneinsert'])->name('one_to_one-inserte');

Route::get('/one-to-many', [OneToManyController::class, 'oneToMany'])->name('one-to-many');
Route::get('/many-to-one', [OneToManyController::class, 'ManyToOne'])->name('many-to-one');
Route::get('/one-to-many-two', [OneToManyController::class, 'oneToManyTwo'])->name('one-to-many-two');
Route::get('/one-to-many-insert', [OneToManyController::class, 'oneToManyInsert'])->name('one-to-many-insert');
Route::get('/has-many-through', [OneToManyController::class, 'hasManyThrough'])->name('has-many-through');
Route::get('/many-to-many', [ManyToManyController::class,'ManyToMany']);
Route::get('/many-to-many-inverse', [ManyToManyController::class, 'ManyToManyInverse']);
Route::get('/many-to-many-insert', [ManyToManyController::class, 'ManyToManyInsert']);
Route::get('polymorphics',[PolymorphicsController::class, 'polymorphic']);
Route::get('polymorphics-insert',[PolymorphicsController::class, 'polymorphicInsert']);

Route::get('/', function () {
    return view('welcome');
});
