<?php

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

//utiliser les view pour changer de page!! pas sur les texte

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about2', function () {
    return view('about2');
});

//partie une --------------------------------------------------------------

//exo1
Route::get('/bonjour', function () {
    return 'Bonjour chers utilisateurs';
});

//exo2

Route::get('/dynamique/{nom}', function ($nom) {
    return 'bonjour les sucres vous etes sur le site ' . $nom;
});


//exo3

// Route::get('/{mot}', function ($mot) {
//     return 'Hello ' . $mot;
// });


//partie deux --------------------------------------------------------------


//partie trois --------------------------------------------------------------

Route::get('/about', function () {
    $phrase = 'Bienvenue sur mon site';
    return view('about', compact('phrase'));
});



//CORRECTION -------------------------------------------------------------------

//pt.1
Route::get('/bonjour2', function () {
    return 'Bonjour chers utilisateurs';
});

//pt.2
Route::get('/bienvenue', function () {
    $bienvenue = 'bienvenue sur mon site';
    return $bienvenue;
});

//pt.3
Route::get('/var/{hello}', function ($hello) {
    return "hello " . $hello;
});



//extra

Route::get('/test', function () {
    $blisk = 'charles de lalaing2';
    $copain = 'swiss army';
    $devant = 'alabama';
    return view('test', compact('blisk', 'copain', 'devant'));
});

Route::get('/variable2', function () {
    $maVariable2 = "<h1>&lt;h1&gt; salut les gars &lt;h1&gt;</h1>";
    return $maVariable2;
});