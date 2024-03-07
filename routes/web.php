<?php

use App\Http\Controllers\ProfileController;
use App\Models\Property;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
   return Inertia::render('Home');
});
Route::get('/blog', function () {
   return Inertia::render('Blog');
});
Route::get('/agent', function () {
   return Inertia::render('Agent');
});
Route::get('/contact', function () {
   return Inertia::render('Contact');
});

Route::get('/all_property', function () {
   $properties = Property::all();
   return Inertia::render('AllProperty', compact('properties'));
});

Route::get('/buy_property', function () {
   $properties=Property::where('property_status', 'buy')->get();
   return Inertia::render('BuyProperty', compact('properties'));
});
Route::get('/rent_property', function () {
   $properties=Property::where('property_status', 'rent')->get();
   return Inertia::render('RentProperty', compact('properties'));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
