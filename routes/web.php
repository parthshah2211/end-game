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

Route::get('/', function () {
        return view('welcome');
});
Route::get('/tournament', function () {
    return view('pages.tournament');
})->middleware('auth');;

Route::get('/comingsoon', function () {
    return view('pages.comingsoon');
})->middleware('auth');;

Route::get('/tournamentDetail', function () {
    return view('pages.maintournament');
})->middleware('auth');;
Route::get('/News', function () {
    return view('pages.News');
})->middleware('auth');;
Route::get('/mainnews', function () {
    return view('pages.mainnews');
})->middleware('auth');;
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/give_way', function () {
    return view('pages.give_way');
});
Route::get('give_way/{gametype}','AdminGiveAwayController@filterGiveWay');
Route::get('/gn', function () {
    return view('pages.gn');
})->middleware('auth');
Route::post('/registerUser/giveway','AdminGiveAwayController@registerGivewayUser')->middleware('auth');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/',function (){
        return view('pages.admin.main');
    });
    Route::get('/get-tournament-data','AdminTournamentController@index');
    Route::get('/tournament',function (){
        return view('pages.admin.tournament');
    })->name('tournament');
    Route::get('/giveaway',function (){
        return view('pages.admin.giveaway');
    })->name('giveaway');

    Route::get('/tournament/create',function (){
        return view('pages.admin.tournament-create');
    });
    Route::get('/get-giveaway-data','AdminGiveAwayController@index');
    Route::get('/giveaway/create',function (){
        return view('pages.admin.giveaway-create');
    });
    Route::post('/create-tournament','AdminTournamentController@insertTournament');
    Route::post('/create-giveaway','AdminGiveAwayController@insertGiveAway');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
