<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, PUT, PATCH, DELETE, GET, OPTIONS');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/reviews', function (Request $request) {
   return \App\Review::limit(20)->orderBy('published_at', 'desc')->get();
});

Route::get('/scores', function (Request $request) {

    $average = App\Review::avg('score');
    $average = round($average * 2) / 2;

    $scores = DB::table('reviews')
                     ->select(DB::raw('score, count(*) as count'))
                    //  ->where('score', '>', 0)
                     ->groupBy('score')
                     ->orderBy('score', 'desc')
                     ->get();

   $total = $scores->sum('count');

   $scores = $scores->map(function($item, $key) use ($total) {
     $item->percentage = $item->count / $total * 100;
     return $item;
   });

   return compact('scores', 'average');

//    return [
//     [
//         "score" => 5,
//         "count" => 900,
//         "percentage" => 90
//     ],
//     [
//         "score" => 4,
//         "count" => 750,
//         "percentage" => 75
//     ],
//     [
//         "score" => 3,
//         "count" => 520,
//         "percentage" => 52
//     ],
//     [
//         "score" => 2,
//         "count" => 210,
//         "percentage" => 21
//     ],
//     [
//         "score" => 1,
//         "count" => 50,
//         "percentage" => 1
//     ]        
//    ];
});
