<?php
use App\Models\Waste;
use Illuminate\Http\Request;
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
Route::get('/logout', function() {
    Auth::logout();

    return redirect('/login');
});

Route::get('/', 'StatisticController@index');
Route::get('/stat', 'StatisticController@statistic');
Route::get('stat/{id}', 'StatisticController@show');
Route::get('stat/{year}/{month}', 'StatisticController@date');
Route::get('/stat/create', 'StatisticController@create');
Route::post('/stat/create', 'StatisticController@save');


Auth::routes();

