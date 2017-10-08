<?php
use App\User;
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


Route::get('/', function () {
    $addresses=\App\Address::all();
    return View('addresses',['address'=>$addresses]);

});

//THE ADDRESSES APP
    Route::get('address', ['uses' => 'Addresses@index']);
    Route::get('add_address', ['uses' => 'Addresses@add_address']);
    Route::post('add_address', ['uses' => 'Addresses@add_address']);

    Route::get('address/edit/{id}', ['uses' => 'Addresses@edit']);
    Route::post('address/edit/{id}', ['uses' => 'Addresses@edit_address']);

    Route::get('address/delete/{id}', ['uses' => 'Addresses@delete']);

    Route::get('address/sort/{any}', ['uses' => 'Addresses@sort']);

    Route::post('address/filter/', ['uses' => 'Addresses@filter']);


//Route::post('edit_address', ['uses' => 'Addresses@edit_address']);
    /*Route::patch('/address/edit/{slug}',[
        'as' => 'address.edit',
        'uses' => 'Address@edit_address'
    ]);*/
