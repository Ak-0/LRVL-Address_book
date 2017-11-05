<?php
use App\User;

	Route::get('/',  ['uses' => 'Addresses@index']	);


//THE ADDRESSES APP


	Route::get('address', ['uses' => 'Addresses@index']);
	Route::get('add_address', ['uses' => 'Addresses@add_address']);
	Route::post('add_address', ['uses' => 'Addresses@add_address']);
 
	Route::get('address/edit/{id}', ['uses' => 'Addresses@edit']);
	Route::post('address/edit/{id}', ['uses' => 'Addresses@edit_address']);
 
	Route::get('address/delete/{id}', ['uses' => 'Addresses@delete']);
 
	Route::get('address/sort/{any}', ['uses' => 'Addresses@sort']);
 
	Route::post('address/filter/', ['uses' => 'Addresses@filter']);
