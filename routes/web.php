<?php
 use App\Mail\TestEmail;
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
Auth::routes();
Route::resource('/ingreso', 'IngresoController');
Route::resource('/gasto', 'GastoController');
Route::resource('/contacto', 'ContactoController');
Route::resource('/inicio','InicioController');
Route::resource('/usuario','UsuarioController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');
Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderGoogleCallback');
Route::get('login/github', 'Auth\LoginController@redirectToProviderGithub');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderGithubCallback');

//Route::get('/{provider}/callback'.'SocialAuthController@handleProviderCallback');
Route::get('/testmail', function() {
$data = ['message' => 'This is a test!'];
Mail::to('armandoaldanainf@gmail.com')->send(new TestEmail($data));

return back();
})->name('testmail');