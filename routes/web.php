<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

/*Route::get('users',function()
{

});

Route::get('users/{user:Username}',function(User $user )
{
    return $user;
});


//create users data
Route::get('users/create',function ()
{

});

//store users data
Route::post('users/store',function ()
{

});


//update user
Route::get('users/store/{id}',function ($id)
{

});

Route::post('users/update/{id}',function (Request  $request,$id)
{

});

//delete user

Route::get('users/delete/{id}',function ($id)
{

});











Route::prefix('users')->group(function()
{
    Route::get('/',function ()
    { })->name('users.index');

    Route::get('/create',function ()
    {

    })->name('users.create');


    Route::post('/',function()
    {

    })->name('users.store');

    Route::get('/{id}',function ($id)
    {

    })->name('users.show');

    Route::get('/{id}/edit',function($id)
    {

    })->name('users.edit');

    Route::put('/{id}',function ($id)
    {

    })->name('users.update');

    Route::Delete('/{id}',function ($id)
    {

    })->name('users.delete');

});

Route::prefix('users/{id}/addresses')->group(function()
{

    Route::get('/',function($id)
    {

    })->name('users.addresses.index');

    Route::get('/create',function ($id)
    {

    })->name('users.addresses.create');

    Route::post('/',function ($id)
    {

    })->name('users.addresses.store');


});

Route::prefix('/addresses/{id}')->group(function()
{
    Route::get('/',function ($id)
    {

    })->name('addresses.show');


    Route::get('/edit',function ($id)
    {

    })->name('addresses.edit');

    Route::put('/',function ($id)
    {

    })->name('addresses.update');

    Route::Delete('/',function ($id)
    {

    })->name('addresses.destroy');


});



Route::get('/home', function () {
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});


Route::get('/home1',function ()
{
    return response('hello from response',200)
            ->withHeaders([
                'Content-Type' => 'text/plain',
                'X-Header-One' => 'Header Value',
                'X-Header-Two' => 'Header Value',
            ]);
});


    Route::get('usersdatas',[UserController::class,'index'])->name('users.index');

Route::get('email-test', function(){

    $details['email'] = 'patelnency7679@gmail.com';

    dispatch(new App\Jobs\testdemo($details));

    dd('done');
});




Route::get('/alert-com',function ()
{
   return view('test');
});
*/

Route::get('/validate',[UserController::class,'store'])->name('users.store');






