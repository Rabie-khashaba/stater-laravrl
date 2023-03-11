<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Front\UserController;
use  App\Http\Controllers\Admin\SecondController;
use  App\Http\Controllers\NewsController;
use  App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index', [UserController::class , 'getIndex']);

Route::get('para' , [UserController::class , 'getpara']);

Route::get('land' , [UserController::class , 'getLanding']);
Route::get('about' , [UserController::class , 'getAbout']);
Route::get('login' , [LoginController::class , 'getLogin']);


Route::get('/test1', function () {
    return "Welcome My Name Is Rabie Khashaba";
});



//routing parameter

//{id} required parameter
Route::get('/show-number/{id}', function ($id) {
    return "Welcome Id Number {$id} ";
}) ->name('a');


//not required id or parameter
Route::get('/show-string/{id?}', function () {
    return "Welcome from test 3";
})->name('b');



//naming routint

// Route::namespace('Front')->group(function(){

//     //All Route only acess controller or method in folder named front
//     Route::get('users',[UserController::class ,'showUserName']);

// });

// Route::namespace('Front')->group(function () {
//     Route::get('users', 'UserController@showUserName');

// });

Route::get('users',[UserController::class ,'showUserName']);


//Group   with prefix

// Route::prefix('users')->group(function(){
// Route::get("/" , function(){
//         return "work";
//     });

//     Route::get('show','UserController@showUserName');
//     Route::get('edit','UserController@showUserName');
//     Route::put('update','UserController@showUserName');
//     Route::delete('delete','UserController@showUserName');
// });



//another syntax to group


// to open this route , you shoule login and register before
// Route::group(['prefix' => 'users' , 'middlware' , 'auth'], function(){

//     Route::get("/" , function(){
//         return "work";
//     });
//     Route::get('show','UserController@showUserName');
//     Route::get('edit','UserController@showUserName');
//     Route::put('update','UserController@showUserName');
//     Route::delete('delete','UserController@showUserName');
// });


//middleware
//allow you to enter into another route Or not


//another syntax
// Route::get('check' , function(){
//     return "middlware";
// })->middlware("auth");


//Work with Namespace

//Route::get('second' ,'Admin\SecondController@showString');


//Route::get('second' ,[SecondController::class , 'showString0']);


//Route::get('second' ,[SecondController::class , 'showString0']);//->middlware('auth');

Route::group(['namespace' => 'Admin'],function(){
    Route::get('second' ,[SecondController::class , 'showString0'])->middleware('auth'); // execute on this method only
    Route::get('second1',[SecondController::class , 'showString1']);
    Route::get('second2' ,[SecondController::class , 'showString2']);
    Route::get('second3' ,[SecondController::class , 'showString3']);
});

Route::get('login', function(){
    return "must be login to acess the Routes";
})->name('login');





//route Resources  all the method with other
//route methods ==> (get , put , delete , push , patch)




// Route::get('news' , [NewsController::class , "index"]);
// Route::post('news' , [NewsController::class , "store"]);
// Route::get('news/create' , [NewsController::class , "create"]);
// Route::get('news/{id}' , [NewsController::class , "show"]);
// Route::get('news/{id}' , [NewsController::class , "update"]);
// Route::get('news/{id}/edit' , [NewsController::class , "edit"]);
// Route::get('news/{id}' , [NewsController::class , "delete"]);


//rather than Write all code (up) ,we used Route:resource() that contain all that code

Route::resource('news' , NewsController::class);

//to enter page verify before to enter page (that you logged in)
Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function(){
    return "Home page";
});


Route::get('/dashboard', function(){
    return "dashboard";
});

