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
/*Route::get('/register', function () {
    return View::make('register');
});*/

/*Route::post('/register', function () {
    $user = new User;
    $user->email = Input::get('email');
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail', $theEmail);
});*/

Route::get('/', function () {
    $addresses=\App\Address::all();
    return View('addresses',['address'=>$addresses]);

    /*Schema::table('art', function($newtable){
            $newtable->increments('id');
               $newtable->string('artist');
               $newtable->string('title',500);
               $newtable->text('description');
               $newtable->date('created');
               $newtable->date('exhibition_date');
               $newtable->timestamps();

        $newtable->DropColumn('exhibition_date');
        $newtable->boolean('alumni');
                });*/
    //return view('welcome');
});
/*    Route::get('signup', function (){
        return View('signup');
    });*/

/*
    Route::post('/signup', function () {

        $user = new User();
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        $theEmail = Input::get('email');
        return View::make('thanks')->with('theEmail', $theEmail);
    });

    Route::get('/new', [
            'uses' => 'Pages@new'
    ]);

    Route::post('thanks', function ()
    {

    //$theEmail = Input::get('email');
    //return View::make('thanks')->with('theEmail', $theEmail);

    });*/


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

//THE ADDRESSES APP 2
        Route::get('address2', ['uses' => 'Address2@index']);
  //    Route::get('add_address', ['uses' => 'Addresses@add_address']);
  //    Route::post('add_address', ['uses' => 'Addresses@add_address']);

      Route::get('edit/{id}', ['uses' => 'Address2@edit']);
      Route::post('edit/{id}', ['uses' => 'Address2@edit']);

      Route::get('delete/{id}', ['uses' => 'Address2@delete']);

      Route::get('sort/{any}', ['uses' => 'Address2@sort']);

  //    Route::post('address/filter/', ['uses' => 'Addresses@filter']);