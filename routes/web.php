<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\AddprodController;
use App\Http\Controllers\PaymentController;

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




//Route::get('/homeadmin', function(){return view('homeadmin');});

Route::get('/register',[RegisterController::class,'create']);
Route::post('/registerread',[RegisterController::class,'store']);
Route::post('/logs',[RegisterController::class,'check']);
//Route::get('/homeuser',[RegisterController::class,'homeuser']);

Route::get('/registerview',[RegisterController::class,'index']);
Route::get('/user/{id}/delete',[RegisterController::class,'deleteview']);
route::post('/userdeleteprocess/{id}',[RegisterController::class,'destroy']);
//Route::get('/logout',[RegisterController::class , 'lgout' ] );


Route::group(['middleware'=>['Usercheck']],function()
{

     //Route::get('/', function () {return view('/');});
     Route::get('/',[RegisterController::class , 'create' ] );

    Route::get('/addp',[RegisterController::class , 'addpview' ] );
    Route::get('productdetail/{id}',[AddprodController::class , 'createdetail' ] );
    Route::get('/addproducts',[AddprodController::class,'create']);
Route::post('/addimage',[AddprodController::class,'store'])->name('addimage');
Route::get('/addview',[AddprodController::class,'index']);
Route::post('/add_to_cart',[AddprodController::class,'addToCart']);
Route::post('/usereditprocess/{id}',[AddprodController::class,'update']);
Route::get('/usereditview/{id}', [AddprodController::class,'edit']);      
Route::get('/usertheme',[AddprodController::class,'image']);
Route::get('/cartlist',[AddprodController::class,'cartlist']);
Route::get('removecart/{id}',[AddprodController::class , 'removecart' ] );
Route::get('buyitem/{id}',[AddprodController::class , 'buyitem' ] );
Route::get('/ordern',[AddprodController::class , 'order' ] );
Route::get('/cancelorder/{id}/{userid}', [AddprodController::class,'cancelorder']);
Route::get('/order/{id}/edit', [AddprodController::class,'orderedit']);
Route::get('/myorder',[AddprodController::class,'myorders']);
Route::post('/orderplace',[AddprodController::class,'orderplace']);
Route::get('/vieworders',[AddprodController::class , 'vieworders' ] );
Route::get('/aboutus',[AddprodController::class,'about']);
Route::post('/ordereditprocess/{id}',[AddprodController::class,'updateorder']);
Route::get('/cartitem',[AddprodController::class,'CartItem']);


// Route::get('/aboutus', function(){return view('aboutus');});
//Route::post('/psearch',[AddprodController::class,'search']);


Route::get('/homeuser',[RegisterController::class,'homeuser']);



Route::get('/logout',[RegisterController::class , 'lgout' ] );

});






Route::get('/aregister',[LoginController::class,'create']);
Route::post('/aregisterread',[LoginController::class,'store']);
Route::post('/log',[LoginController::class,'log']);

//Route::get('/add',[AddController::class,'create']);
//Route::post('/addread',[AddController::class,'store']);

//Route::get('/addproducts','AddprodController@index');
//Route::post('/addimage','AddprodController@store')->name('addimage');
Route::get('/signup_admin',[LoginController::class,'create']);
Route::get('/addproducts',[AddprodController::class,'create']);
Route::post('/addimage',[AddprodController::class,'store'])->name('addimage');
Route::get('/addview',[AddprodController::class,'index']);
//Route::post('/add_to_cart',[AddprodController::class,'addToCart']);
Route::get('/user/{id}/delete',[AddprodController::class,'deleteview']);
route::post('/userdeleteprocess/{id}',[AddprodController::class,'destroy']);
Route::post('/usereditprocess/{id}',[AddprodController::class,'update']);
Route::get('/usereditview/{id}', [AddprodController::class,'edit']);      
Route::get('/usertheme',[AddprodController::class,'image']);
//Route::get('/cartlist',[AddprodController::class,'cartlist']);
//Route::get('removecart/{id}',[AddprodController::class , 'removecart' ] );
Route::get('productdetail/{id}',[AddprodController::class , 'createdetail' ] );
//Route::get('buyitem/{id}',[AddprodController::class , 'buyitem' ] );
//Route::get('/ordern',[AddprodController::class , 'order' ] );

//Route::get('/cancelorder/{id}/{userid}', [AddprodController::class,'cancelorder']);
Route::get('/order/{id}/edit', [AddprodController::class,'orderedit']);
//Route::get('/myorder',[AddprodController::class,'myorders']);
Route::get('/vieworders',[AddprodController::class , 'vieworders' ] );

Route::post('/orderplace',[AddprodController::class,'orderplace']);
Route::post('/ordereditprocess/{id}',[AddprodController::class,'updateorder']);




//Route::post('/am',[PaymentController::class , 'store' ] );






// Route::get('/ordernow', function(){return view('ordernow');});
// Route::get('/', function(){return view('signup_user');});
// Route::get('/signup_admin', function(){return view('signup_admin');});
// Route::get('/signup_u', function(){return view('signup_u');});
// Route::get('/shop', function(){return view('shop');});
// Route::get('/flare', function(){return view('flare');});
// Route::get('/deebaco', function(){return view('deebaco');});
// Route::get('/cart ', function(){return view('cart');});
// Route::get('/vaghbhatt', function(){return view('vaghbhatt');});
// Route::get('/straightner', function(){return view('straightner');});
// Route::get('/detail', function(){return view('detail');});
// Route::get('/layout', function(){return view('layout');});
// Route::get('/products ', function(){return view('products');});
// Route::get('/header ', function(){return view('header');});
// Route::get('/product ', function(){return view('product');});
// Route::get('/addproducts', function(){return view('addproducts');});
// Route::get('/receipt', function(){return view('receipt');});
Route::get('/login_admin', function(){return view('login_admin');});
// Route::get('/viewuser', function(){return view('viewuser');});
// Route::get('/payment ', function(){return view('payment');});
// Route::get('/usertheme', function(){return view('usertheme');});
// Route::get('/order', function(){return view('order');});

// Route::get('/addpview', function(){return view('addpview');});
// Route::get('/userdel', function(){return view('userdel');});
// Route::get('/deleteview', function(){return view('deleteview');});

// Route::get('/admin', function(){return view('admin');});

// Route::get('/aboutus', function(){return view('aboutus');});

// Route::get('/robot', function(){return view('robot');});

// Route::get('/thanku', function(){return view('thanku');});





