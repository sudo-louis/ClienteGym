<?php

use App\Http\Controllers\FakeStoreApiController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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

//GitHub Login
Route::get('auth/github', [GithubController::class, 'redirect'])->name('github.login');
Route::get('auth/github/callback', [GithubController::class, 'callback']);
Route::get('/index', function () {
    return view('index');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::view('/login/register','/login/register');
Route::get('/registro', [LoginController::class, 'register'])->name('register');
Route::post('/registro', [LoginController::class, 'registrar'])->name('registrar');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//CATALOGO API FAKESTORE
Route::get('/catalogo/listado', [FakeStoreApiController::class, 'productos']);
Route::get('/catalogo/detalle/{id}', [FakeStoreApiController::class, 'productobyid']);


Route::view('/plantilla/navbar', '/plantilla/navbar');
Route::view('/plantilla/footer', '/plantilla/footer');
Route::view('/plantilla/navegacionClient', '/plantilla/navegacionClient');



// Route::get('/login-google', function () {
//     return Socialite::driver('google')->redirect();
// });
// Route::get('/callback', function() {
//     $user = Socialite::driver('google')->user();
//     $userExists = User::where('external_id',$user->id)->where('external_auth', 'google')->first();
//     if ($userExists) {
//         Auth::login($user);
//     }else {
//         $userNew = User::create([
//             'name' => $user->name,
//             'email' => $user->email,
//             'avatar' => $user->avatar,
//             'external_id' => $user->external_id,
//             'external_auth' => $user->external_auth,
//         ]);
//         Auth::login($userNew);
//     }

//     return redirect(route('index'));
// });