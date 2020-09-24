<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Auth;

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
Route::domain('localhost.lcom')->group(function () {

    Route::middleware([Auth::class])->group(function () {

        Route::permanentRedirect('/', '/home');
        Route::get('/home', 'Website\HomeController@index');

    });

    Route::redirect('/login', 'http://portal.localhost.lcom/login');
});

Route::domain('portal.localhost.lcom')->group(function () {

    Route::middleware([Auth::class])->group(function () {

        Route::permanentRedirect('/', '/home');

        Route::get('/home', 'Portal\HomeController@index');

        Route::get('/welcome', function () {
            return view('welcome');
        });
    });

    Route::get('/login', 'Portal\Login\LoginController@index');
});

Route::domain('api.localhost.lcom')->group(function () {

    // Route::middleware([Auth::class])->group(function () {

        Route::get('/', function () {

            $response = new stdClass();
            $response->error = 200;
            $response->message = 'Work';

            return response()->json($response);
        });
    // });
});
