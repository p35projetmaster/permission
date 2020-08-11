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
Route::get('/', 'IndexController@index');
Route::get('/Abonnement', 'IndexController@abonnement');
Route::get('/Contact', 'IndexController@contact');
Route::get('/Points_de_ventes', 'localisationController@index');
Route::get('/Cahier_de_charge', 'IndexController@Cahier_de_charge');
Route::get('/tarif', 'IndexController@tarif');

Route::get('/home2', 'PanelController@home');
Route::get('/importer_annonceur', 'PanelController@importer_annonceur')->middleware('permission:Importation');
Route::get('/importer_annonce', 'PanelController@importer_annonce')->middleware('permission:Importation');





Route::get('/TransfertArchive', 'PanelController@archive')->middleware('permission:Archive');


Route::post('fileimport', 'AnnonceurController@fileImport')->name('fileimport')->middleware('permission:Importation');



Route::post('file-import', 'AnnonceController@Import')->name('file-import')->middleware('permission:Importation');


Route::post('archive', 'AnnonceController@archive')->name('archive')->middleware('permission:Archive');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('searchannonce', 'SearchController@show');
Route::POST('searchresult', 'SearchController@search')->name('searchresult');
Route::get('addadmine', 'RoleController@show')->middleware('permission:Role');
Route::POST('create_admine', 'RoleController@create')->name('create_admine');
Route::get('adminslist', 'AdminController@index')->middleware('permission:Role');
Route::resource('admins', 'AdminController')->middleware('permission:Role');
