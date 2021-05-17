<?php

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

use Illuminate\Support\Facades\Route;

//homepage
Route::get('/',function(){
    return view('index');
});

//switch language
Route::get('/locale/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

//contact
Route::prefix('/contact')->group(function(){
    Route::get('', 'ContactController@Contact');
    Route::post('', 'ContactController@store');
});

/* ==== Pages Routes ==== */

    Route::get('/portfolio', 'PageController@Portfolio' );

    Route::get('/project-detail/{name}', 'PageController@ProjectDetail');

    Route::get('/expertises', 'PageController@Expertises');
    Route::get('/expertises', 'PageController@ExpertisesWithId');

    Route::get('/career', 'PageController@Career');

    Route::get('/company-profile', 'PageController@CompanyProfile');
    
/* =========================================================== */




