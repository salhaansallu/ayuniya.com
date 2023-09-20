<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Models\products;
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
    $products = products::where('vendor', '=', '1')->inRandomOrder()->limit(5)->get();
    $products->map(function ($varients){
        return $varients->varient;
    });
    return view('home')->with('products', $products);
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::post('/send-message', [MessagesController::class, 'store']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
