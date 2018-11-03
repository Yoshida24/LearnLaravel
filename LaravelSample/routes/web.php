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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

/*index*/
Route::get('hello','HelloController@index');

/*Chapter1*/
Route::get('hello/chapter1','HelloController@chapter1');

/*Chapter2*/
Route::get('hello/chapter2','HelloController@chapter2');
Route::get('hello/chapter2/returnhtml',function(){
  return '<html><body><h1>Hello</h1></body></html>';
});
Route::get('hello/chapter2/routeParameter/{msg}',function($msg){
  return '<html><body><h1>'.$msg.'</h1></body></html>';
});
Route::get('hello/chapter2/multiparam/{msg1}/{msg2?}',function($msg1,$msg2='NO_VELUE_GIVEN'){
  $html = <<<EOF
    <html>
      <body>
        <h1>Hello<h1>
        <p>display message1 sample : {$msg1} </p>
        <p>display message2 sample : {$msg2} </p>
      </body>
    </html>
EOF;
  return $html;
});
Route::get('hello/chapter2/requestsample','HelloController@requestSample');

/*Chapter3*/
Route::get('hello/chapter3','HelloController@chapter3');

/*Chapter4*/
Route::get('hello/chapter4','HelloController@chapter4');
//Route::get('hello/chapter4/middlewareSample1','HelloController@middlewareSample1');
//Route::get('hello/chapter4/middlewareSample1','HelloController@middlewareSample1')->middleware(HelloMiddleware::class);
Route::get('hello/chapter4/middlewareSample1','HelloController@middlewareSample1')->middleware('helo');

/*Chapter5*/
Route::get('hello/chapter5','HelloController@chapter5');

/*Chapter6*/
Route::get('hello/chapter6','HelloController@chapter6');

/*Chapter7*/
Route::get('hello/chapter7','HelloController@chapter7');


Route::get('hellowithparam/{param1}/{param2?}','HelloController@hellowithparam');
Route::get('hello/templatesample','HelloController@templateSample');
Route::get('hello/querystringsample','HelloController@queryStringSample');
Route::get('hello/formsample1','HelloController@formSample1');
Route::post('hello','HelloController@formSample2');
