<?php

use App\Http\Controllers\ApiPayPalController;
use App\Http\Controllers\FakeStoreApiController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\IpDataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


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

//Middlewares
Route::middleware('auth.custom')->group(function () {
    Route::get('/index', [IpDataController::class, 'getUserInfo'])->name('index');
    Route::view('/planes/planes', '/planes/planes');
    Route::get('/inventario/inventario', [ProductoController::class, 'index']);
    Route::resource('inventario', ProductoController::class);
    Route::post('/carrito/agregar',[ProductoController::class, 'agregarCarrito']);
    Route::get('/prueba/producto', [ProductoController::class, 'productosCarrito']);
    Route::post('/carrito/quitar', [ProductoController::class, 'quitarCarrito']);
    Route::post('/carrito/incrementar', [ProductoController::class, 'incrementarCarrito']);
    Route::post('/carrito/decrementar', [ProductoController::class, 'decrementarCarrito']);
    //Api de Paypal
    Route::post('pay', [ApiPayPalController::class, 'pay'])->name('payment');
    Route::get('success', [ApiPayPalController::class, 'success']);
    Route::get('error', [ApiPayPalController::class, 'error']);
    //CATALOGO API FAKESTORE
    Route::get('/catalogo/listado', [FakeStoreApiController::class, 'productos']);
    Route::get('/catalogo/detalle/{id}', [FakeStoreApiController::class, 'productobyid']);
});

//GitHub Login
Route::get('auth/github', [GithubController::class, 'redirect'])->name('github.login');
Route::get('auth/github/callback', [GithubController::class, 'callback']);

//Login y Register con Formulario
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::view('/login/register', '/login/register');
Route::get('/registro', [LoginController::class, 'register'])->name('register');
Route::post('/registro', [LoginController::class, 'registrar'])->name('registrar');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//Plantillas
Route::view('/plantilla/navbar', '/plantilla/navbar');
Route::view('/plantilla/footer', '/plantilla/footer');
Route::view('/plantilla/navegacionClient', '/plantilla/navegacionClient');