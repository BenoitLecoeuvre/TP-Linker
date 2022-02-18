<?php

use App\Models\Link;
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
    return view('accueil');
});

// Traite le formulaire
Route::post('/', function () {
    request()->validate([
        'name' => 'required|min:3|max:10',
        'url' => 'required|min:3',
    ]);

    // S'il n'y a pas d'erreurs, on crée la catégorie
    Link::create([
        'name' => request('name'),
        'url' => request('url')
    ]);

    return redirect('/');
});
