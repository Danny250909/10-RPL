<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

    // Route::get('/', [FrontController::class, 'index']);
    
    // Route::get('/', function () {
    //     return view('welcome');
    // });
// Route::get('/',[FrontController::class,'index']);

// Route::get('/show/{id}',[FrontController::class,'show']);
// Route::get('register',[FrontController::class,'register']);

// Route::get('login',[FrontController::class,'login']);
// Route::get('logout',[FrontController::class,'logout']);

// Route::post('postregister',[FrontController::class,'store']);
// Route::post('postlogin',[FrontController::class,'postlogin']);

// Route::get('beli/{idmenu}', [CartController::class,'beli']);
// Route::get('hapus/{idmenu}', [CartController::class,'hapus']);
// Route::get('tambah/{idmenu}', [CartController::class,'tambah']);
// Route::get('kurang/{idmenu}', [CartController::class,'kurang']);

// Route::get('cart', [CartController::class,'cart']);
// Route::get('batal', [CartController::class,'batal']);
// Route::get('checkout', [CartController::class,'checkout']);

// Route::get('admin', [AuthController::class,'index']);
// Route::get('admin/logout', [AuthController::class,'logout']);
// Route::post('admin/postlogin', [AuthController::class,'postlogin']);
// Route::get('admin/logout', [AuthController::class,'logout']);

// Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function(){

        // Route::group(['middleware' => ['CekLogin:admin'] ], function(){
            // Route::resource('user', UserController::class);
    // });   

        // Route::group(['middleware' => ['CekLogin:kasir'] ], function(){
            // Route::resource('order', OrderController::class);
    // });   

        // Route::group(['middleware' => ['CekLogin:manager'] ], function(){
            // Route::resource('kategori', KategoriController::class);
            // Route::resource('menu', MenuController::class);
            // Route::get('select', [MenuController::class, 'select']);
    // });   

// });