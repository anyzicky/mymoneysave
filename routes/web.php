<?php

use App\Models\Waste;

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

$app->get('/', function () use ($app) {

    $wastes = Waste::query()->get()->all();

    if(empty($wastes)) {
        throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }

    return view('wastes', ['wastes' => $wastes]);

});
