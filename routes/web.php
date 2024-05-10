<?php

use App\Enums\RolesEnum;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\ProfileController;
use App\Models\Comment;
use App\Models\Note;
use App\Models\University;
use App\Models\User;
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

// Route::group([
//     'prefix' => LaravelLocalization::setLocale(), // Utilisez le package pour définir la langue
//     'before' => 'LaravelLocalizationRedirectFilter', // Modifiez l'URL pour correspondre à la langue
// ], function () {
    
// });


Route::get('/', function () {
    return view('home');
})->name('home');



Route::middleware('auth', 'verified', 'role:'.RolesEnum::ADMIN->value)->prefix('dashboard')->group(function (){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/universities', function () {
        $universities = University::all();
        return view('admin.universities', compact('universities'));
    })->name('universities');
    
    Route::get('/universities/add', function () {
        return view('admin.new-university');
    })->name('universities.add');

    Route::post('/universities/add', [UniversityController::class, 'store'])->name('universities.store');

    Route::get('/universities/{university}/show', function (University $university) {
        return view('admin.show-university', compact('university'));
    })->name('universities.show');

    Route::post('/universities/{university}/edit', [UniversityController::class, 'update'])->name('universities.edit');

    Route::get('/universities/{university}/delete', function (University $university) {
        $university->delete();
        return redirect()->route('universities');
    })->name('universities.delete');

    Route::get('/users', function () {
        $users = User::all();
        return view('admin.users', compact('users'));
    })->name('users');

    Route::get('/users/{user}/delete', function (User $user) {
        $user->delete();
        return redirect()->route('users');
    })->name('users.delete');

    Route::get('/notes', function () {
        $notes = Note::all();
        return view('admin.notes', compact('notes'));
    })->name('notes');

    Route::get('/comments', function () {
        $comments = Comment::all();
        return view('admin.comments', compact('comments'));
    })->name('comments');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
