<?php

use App\Enums\RolesEnum;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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
    return view('home');
});



Route::middleware('auth', 'verified', 'role:'.RolesEnum::ADMIN->value)->prefix('dashboard')->group(function (){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/universities', function () {
        return view('admin.universities');
    })->name('universities');
    
    Route::get('/universities/add', function () {
        return view('admin.new-university');
    })->name('universities.add');

    Route::post('/universities/add', function (Request $request) {
        dd($request);
    })->name('universities.store');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/notes', function () {
        return view('admin.notes');
    })->name('notes');

    Route::get('/comments', function () {
        return view('admin.comments');
    })->name('comments');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
