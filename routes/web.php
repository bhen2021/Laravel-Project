<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return "Hi About Page";
    
});

Route::get('/contact', function () {
    return "Hi I am contact";
    
});

Route::get('/post/{id}/{name}/{contact}/{guardian}', function($id,$name,$contact,$guardian) {
    return "this is post number ". $id . " " . $name . " " . $contact . " " . $guardian;
    
});

Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){

        $url = route('admin.home');


        return "this url is ". $url;



}));


Route::get('foo', function () {
    return 'Hello World';
});



Route::get('/home/{id}/{name}/{contact}/{guardian}/', function ($id,$name,$contact,$guardian) {

	return "HelloBEN" . " " . $id . " " . $name . " " . $contact . " " . $guardian;

});

Route::get('/home', function(){

    return "TAGUIG";


});