

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Noticias1Controller;


Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('auth')->group(function() {
    Route::resource('noticias', Noticias1Controller::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('noticias', [App\Http\Controllers\Noticias1Controller::class, 'index']);
Route::get('noticias/create', [App\Http\Controllers\Noticias1Controller::class, 'create']);
Route::post('noticias', [App\Http\Controllers\Noticias1Controller::class, 'store']); // Rota responsável por salvar a criação 
Route::get('noticias/{noticia}/edit', [App\Http\Controllers\Noticias1Controller::class, 'edit']); // Rota responsável pelo formulário de edição
Route::put('noticias/{noticia}/edit', [App\Http\Controllers\Noticias1Controller::class, 'update']); // Rota responsável por salvar a edição
Route::delete('noticias/{noticia}', [App\Http\Controllers\Noticias1Controller::class, 'destroy']); // Rota responsável por excluir um registro

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::resource('noticias', NoticiaController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
*/
