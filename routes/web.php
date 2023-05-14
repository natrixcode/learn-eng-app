<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\GoogleAuthController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InviteController;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Rule;

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

Auth::routes();

Route::get('/', function () {
	return view('dashboard');
})->name('dashboard');


Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);



// Маршрут для відображення форми запрошення
Route::get('/invite', [InviteController::class, 'showInviteForm'])->name('invite.show');

// Маршрут для надсилання запрошення
Route::post('/invite/send', [InviteController::class, 'sendInvitation'])->name('invite.send');

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('/user-management', [UserManagementController::class, 'index'])->name('user-management');
	Route::get('edit-user-profile/{id}', [UserManagementController::class, 'edit'])->name('edit-user-profile');
	Route::patch('update-user-profile/{id}', [UserManagementController::class, 'update']);
	Route::post('/create-user', [UserManagementController::class, 'store'])->name('user-management.store');
	Route::delete('delete-user/{id}', [UserManagementController::class, 'destroy']);

	Route::get('/rating', [UserManagementController::class, 'index'])->name('rating');




    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');




	Route::get('grammar', function () {
		return view('grammar');
	})->name('grammar');

	Route::get('listening', function () {
		return view('listening');
	})->name('listening');

	Route::get('reading', function () {
		return view('reading');
	})->name('reading');

	Route::get('writing', function () {
		return view('writing');
	})->name('writing');
	
	Route::get('vocabulary', function () {
		return view('vocabulary');
	})->name('vocabulary');

	Route::get('test-level', function () {
		return view('test-level');
	})->name('test-level');



	// LOGIN




    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);

 	Route::get('/user-profile', [PostController::class, 'index']);
	// Route::get('/user-profile', [PostController::class, 'create']);
	// Route::post('/user-profile', [PostController::class, 'store']);

    // Route::get('/login', function () {
	// 	return view('dashboard');
	// })->name('sign-up');
});




Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});



Route::get('/login', function () {
	return view('session/login-session');
})->name('login');