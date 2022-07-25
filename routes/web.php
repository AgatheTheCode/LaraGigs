<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading' => 'Latest listing',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Description Listing One',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Description Listing Two',
            ]
        ]
    ]);
});

Route::get(
    '/hello',
    function () {
        return response('<h1>hello</h1>', 200);
    }
);
Route::get(
    '/posts/{id}',
    function ($id) {
        //dd($id);
        //ddd($id);
        return response('Post ' . $id);
    }

)->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return ($request->name . ' ' . $request->ville);
});
