<?php


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryCategoryController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

//  gallery
Route::get('/admin-gallery', [GalleryController::class, 'index'])->name('gallery-index');
Route::get('/admin-gallery-category', [GalleryCategoryController::class, 'index'])->name('gallery-category-index');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Backend
Route::get('/admin', [DashboardController::class, 'admin']);
Route::get('/administrator', [DashboardController::class, 'administrator']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
