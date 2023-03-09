<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Owner\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Owner\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Owner\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Owner\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Owner\Auth\NewPasswordController;
use App\Http\Controllers\Owner\Auth\PasswordController;
use App\Http\Controllers\Owner\Auth\PasswordResetLinkController;
use App\Http\Controllers\Owner\Auth\RegisteredUserController;
use App\Http\Controllers\Owner\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner\Auth\UserListController; //追加
use App\Http\Controllers\Owner\Auth\OwnerController; //追加
use App\Models\Owner; //追加

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
    return view('owner.welcome');
});

Route::get('/dashboard', function () {
    return view('owner.dashboard');
})->middleware(['auth:owners', 'verified'])->name('dashboard');

Route::get('/users-list', function () {
    return view('owner.users-list');
})->middleware(['auth:owners', 'verified'])->name('users-list');

Route::get('/users-detail', function () {
    return view('owner.users-detail');
})->middleware(['auth:owners', 'verified'])->name('users-detail');

// //owner：ダッシュボード表示(owner.blade.php)
// Route::get('/', [OwnerController::class,'index'])->middleware(['auth:owners'])->name('owner_index');
// Route::get('/dashboard', [OwnerController::class,'index'])->middleware(['auth:owners'])->name('dashboard');

// //owner：追加 
// Route::post('/owners',[OwnerController::class,"store"])->name('owner_store');

// //owner：削除 
// Route::delete('/owner/{owner}', [OwnerController::class,"destroy"])->name('owner_destroy');

// //owner：更新画面
// Route::post('/ownersedit/{owner}',[OwnerController::class,"edit"])->name('owner_edit'); //通常
// Route::get('/ownersedit/{owner}', [OwnerController::class,"edit"])->name('edit');      //Validationエラーありの場合

// //owner：更新画面
// Route::post('/owners/update',[OwnerController::class,"update"])->name('owner_update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('guest')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');

});

Route::middleware('auth:owners')->group(function () {

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])  
        ->name('logout');

});
