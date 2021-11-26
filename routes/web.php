<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;
// use Auth;
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

Auth::routes();

//-------------------------------------------------Route-Profile----------------------------------------------------------------------

Route::get('/about','HomeController@about');
Route::get('/menu', 'HomeController@menu');
Route::get('/home', 'HomeController@index')->name('home');

//-------------------------------------------------Route-Admin----------------------------------------------------------------------
Route::get('/index','Admin\AdminController@index')->name('index');

Route::get('/product','Admin\ProductController@product')->name('product');
Route::get('/back','Admin\BackController@back')->name('back');
Route::get('/content','Admin\ContentController@content')->name('content');
Route::get('/promotion','Admin\PromotionController@promotion')->name('promotion');
Route::get('/typeproduct','Admin\TypeProductController@typeproduct')->name('typeproduct');
Route::get('/user','Admin\UserController@user')->name('user');
Route::get('/homepage','Admin\HomepageController@homepage')->name('homepage');

//-------------------------------------------------Route-Edit----------------------------------------------------------------------

Route::get('/editproduct','Admin\EditProductController@editproduct')->name('editproduct');
Route::get('/editback','Admin\EditBackController@editback')->name('editback');
Route::get('/editcontent','Admin\EditContentController@editcontent')->name('editcontent');
Route::get('/editpromotion','Admin\EditPromotionController@editpromotion')->name('editpromotion');
Route::get('/edittypeproduct','Admin\EdittypeProductController@edittypeproduct')->name('edittypeproduct');
Route::get('/edituser','Admin\EditUserController@edituser')->name('edituser');
Route::get('/edithomepage','Admin\EditHomePageController@edithomepage')->name('edithomepage');

//-------------------------------------------------Route-Add----------------------------------------------------------------------

Route::get('/addproduct','Admin\AddProductController@addproduct')->name('addproduct');
Route::get('/addback','Admin\AddBackController@addback')->name('addback');
Route::get('/addcontent','Admin\AddContentController@addcontent')->name('addcontent');
Route::get('/addpromotion','Admin\AddPromotionController@addpromotion')->name('addpromotion');
Route::get('/addtypeproduct','Admin\AddTypeProductController@addtypeproduct')->name('addtypeproduct');
Route::get('/addhomepage','Admin\AddHomePageContrller@addhomepage')->name('addhomepage');



//-------------------------------------------------CR-System-Route-Add-----------------------------------------------------------------------
Route::post('/admin/Addtypeproduct/create','Admin\AddTypeProductController@create')->name('addtypeproduct.create');


//----------------------------------------------<---Middleware--Roite-----------------------------------------------------------------------

// Route::middleware(['auth','Verifyisadmin'])->group(function()
//     {

        
        
// });


