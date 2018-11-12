<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard','HomeController@dashboard');

    Route::get('addrole','HomeController@addrole');
    Route::get('rolelist','HomeController@rolelist');
    Route::get('editrole/{id}','HomeController@editrole');
    Route::get('deleterole/{id}','HomeController@deleterole');

    Route::get('addpermission','HomeController@addpermission');
    Route::get('permissionlist','HomeController@permissionlist');
    Route::get('editpermission/{id}','HomeController@editpermission');
    Route::get('deletepermission/{id}','HomeController@deletepermission');


    Route::get('adduser','HomeController@adduser');
    Route::get('userlist','HomeController@userlist');
    Route::get('edituser/{id}','HomeController@edituser');
    Route::get('deleteuser/{id}','HomeController@deleteuser');

    Route::get('addproducts','HomeController@addproducts');
    Route::get('productslist','HomeController@productslist');
    Route::get('editproducts/{id}','HomeController@editproducts');
    Route::get('deleteproducts/{id}','HomeController@deleteproducts');

    Route::get('addcategory','HomeController@addcategory');
    Route::get('productcategorylist','HomeController@productcategorylist');
    Route::get('editproductcategory/{id}','HomeController@editproductcategory');
    Route::get('deleteproductcategory/{id}','HomeController@deleteproductcategory');




    Route::post('addrole','AdminController@addrole');
    Route::post('addpermission','AdminController@addpermission');
    Route::post('adduser','AdminController@adduser');
     Route::post('addcategory','AdminController@addcategory');
     Route::post('addproducts','AdminController@addproducts');





});