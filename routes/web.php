<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('allPost',
    ['posts' => Post::where('active', true)->get()]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
//Solucion para cargar el contenido de cada blog modo novato :v
// Route::get('/{id}',[PostController::class, 'show'])->name('posts.blogPrincipal');
//Solucion para cargar usando asset($post->image_url), recomendado :D, crea la ruta del mismo objeto, y no del url
Route::get('/posts/allDetails/{id}',[PostController::class, 'show'])->name('posts.blogPrincipal');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
Route::delete('/posts/delete/{id}',[PostController::class, 'destroy'])->name('posts.destroy');
//ACtualizar formulario
Route::get('/posts/updateForm/{id}',[PostController::class, 'updateForm'])->name('posts.updateForm');
Route::put('/posts/update/{id}',[PostController::class, 'update'])->name('posts.update');
