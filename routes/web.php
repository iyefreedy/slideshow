<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\GraduateController;
use App\Http\Controllers\ProfileController;
use App\Models\Department;
use App\Models\Graduate;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/slideshow', 'App\Http\Controllers\SlideshowController@index');
Route::get('/slideshow/{index}', 'App\Http\Controllers\SlideshowController@show');

Route::get('test', function() {
    $departments = Department::all();

    foreach($departments as $department) {
        $graduates = $department->graduates()->where('idWisuda', 27)->get();

        for($i = 0; $i < count($graduates); $i++) {
            $graduates[$i]->update(['sort' => $i + 1]);
        }
    }

    dd($departments->toArray());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('graduates', GraduateController::class);
    Route::resource('faculties', FacultyController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
