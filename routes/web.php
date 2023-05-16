<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\DashboardController;

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

// Route::get('/', function () {
//     return 'Welcome to the home page!';
// });

// Route::get('/about', function () {
//     return 'This is the about page.';
// });

// Route::get('/contact', function () {
//     return 'Contact us at example@example.com';
// });

// Route::get( '/user/{id}', function ( $id ) {
//     return "User ID: " . $id;
// } );



Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );
Route::get( '/about', [HomeController::class, 'about'] )->name( 'about' );
Route::get( '/contact', [HomeController::class, 'contact'] )->name( 'contact' );


// Route group with prefix and middleware
// Route::prefix( 'admin' )->middleware( 'auth' )->group( function () {
//     // Dashboard route
//     Route::get( '/dashboard', [DashboardController::class, 'index'] )->name( 'admin.dashboard' );

//     // Users resourceful routes
//     Route::resource( 'users', UsersController::class );
// } );

Route::prefix( 'admin' )->group( function () {
    // Dashboard route
    Route::get( '/dashboard', [DashboardController::class, 'index'] )->name( 'admin.dashboard' );

    // Users resourceful routes
    Route::resource( 'users', UsersController::class );
} );
