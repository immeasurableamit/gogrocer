<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use function GuzzleHttp\json_decode;

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

Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/testing', function () {

    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'https://api.tikapi.io/public/discover/music?keyword=staydance&cursor=2', [
        'headers' => [ 'X-API-KEY' => 'vOHsuJfqr8LFyYitEPYWEs606pXvvpVF']
    ])->getBody()->getContents();

    echo $res->getStatusCode();
});


