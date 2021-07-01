<?php

use App\Http\Controllers\MainRoute;
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


// Route::get('/contact/info', function () {
//     return view('infos.contact.info');
// })->name('info');

// Route::get('/contact/partenariat', function () {
//     return view('infos.contact.partenariat');
// })->name('partenariat');

// Route::get('/contact/sav', function () {
//     return view('infos.contact.sav');
// })->name('sav');

view()->composer(['*'], function ($view) {
    $front = [
        'perso1' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso2' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso3' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso4' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
        'perso5' => [
            'nom' => 'charles',
            'fonction' => 'front',
            'photo' => asset('images/tete.jpg')
        ],
    ];

    $back = [
        'perso1' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
        'perso2' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
        'perso3' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
        'perso4' => [
            'nom' => 'charles',
            'fonction' => 'back',
            'photo' => asset('images/tete.jpg')
        ],
    ];

    $view->with('front', $front);
    $view->with('back', $back);
});

// Route::get('/team/front', function () {
//     return view('team.web.dev.frontend');
// })->name('font');

// Route::get('/team/back', function () {
//     return view('team.web.dev.backend');
// })->name('back');


// Route::get('/home', function () {
//     return view('layouts.home');
// })->name('home');



//controller route pour 

Route::get('/home', [MainRoute::class, 'index'])->name('home') ;
Route::get('/sav', [MainRoute::class, 'sevPage'])->name('sav');
Route::get('/partenariat', [MainRoute::class, 'partenariatPage'])->name('partenariat');
Route::get('/info', [MainRoute::class, 'infoPage'])->name('info');
Route::get('/back', [MainRoute::class, 'frontPage'])->name('font');
Route::get('/front', [MainRoute::class, 'backPage'])->name('back');



// coorection pour faire les importation d'object

Route::get('/test', function () {
    $frontends = [
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactus', 'fonction' => 'bg de la street', 'photo' => 'tete.jpg'],
    ];
    return view('test', compact('frontends'));
});

Route::get('/test2', function () {
    $backends = [
        (object)['nom' => 'cactusBoy', 'fonction' => 'bg de la street tu connés', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactusBoy', 'fonction' => 'bg de la street tu connés', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactusBoy', 'fonction' => 'bg de la street tu connés', 'photo' => 'tete.jpg'],
        (object)['nom' => 'cactusBoy', 'fonction' => 'bg de la street tu connés', 'photo' => 'tete.jpg'],
    ];
    return view('test2', compact('backends'));
});

