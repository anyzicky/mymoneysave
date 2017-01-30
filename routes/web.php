<?php

use App\Models\Waste;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/login', 'LoginController@showLogin');
$app->post('/login', 'LoginController@doLogin');

$app->get('/', 'StatisticController@index');
$app->get('/stat', 'StatisticController@statistic');
$app->get('stat/{id}', 'StatisticController@show');
$app->get('stat/{year}/{month}', 'StatisticController@date');
$app->get('/stat/create', 'StatisticController@create');
$app->post('/stat/create', 'StatisticController@save');

