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

//BASIC ROUTING <---

Route::get('greetings',function(){
    return ('Hello HTTP Routing');
});

Route::get('/about', function () {
    return "Hi About Page";
    
});

Route::get('/contact',array('as'=>'contact.page', function () {

    return "Hi I am contact";

}));

//Routes Parameters <---

Route::get('/post/{id}/{name}/{contact}/{guardian}', function($id,$name,$contact,$guardian) {
    return "this is post number ". $id . " " . $name . " " . $contact . " " . $guardian;
    
});

//Naming Routes <---

Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){

    $url = route('admin.home');


    return "this url is ". $url;



}));

Route::get('/home',array('as'=>'home.page' ,function(){
    
    return "This is home page";
}));

Route::get('facebook/{password?}',array('as'=>'facebook.page',function($password){
    $name = "bensor datumanong";
    return 'username: '. $name . " Password: " . $password;

}));

Route::get('facebook',array('as'=>'username',function(){
    $name = 'Bensor Datumanong';
    return 'Username: '. $name;
    
}));










