<?php

use App\Http\Controllers\FakeStoreApiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
    Route::view('/inventario/inventario','/inventario/inventario');
    Route::view('/planes/planes','/planes/planes');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::view('/login/register','/login/register');
Route::get('/registro', [LoginController::class, 'register'])->name('register');
Route::post('/registro', [LoginController::class, 'registrar'])->name('registrar');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//CATALOGO API FAKESTORE
Route::get('api/fakestore/productos',[FakeStoreApiController::class,'productos']);
Route::get('api/fakestore/productos/detalle/{id}',[FakeStoreApiController::class,'productobyid']);
Route::view('/catalogo/listado', '/catalogo/listado');
Route::view('/catalogo/detalle', '/catalogo/detalle');


Route::view('/plantilla/navbar', '/plantilla/navbar');
Route::view('/plantilla/footer', '/plantilla/footer');
Route::view('/plantilla/navegacionClient', '/plantilla/navegacionClient');