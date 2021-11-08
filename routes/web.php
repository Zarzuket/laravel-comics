<?php

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
    $data = config("comics");
    $firstListFooter = config("footerListFirst");
    // $secondListFooter = config("footerListSecond");
    // dd($data);
    // dd($firstListFooter);
    // dd($secondListFooter);
    $tmp = [
        "comics" => $data
    ];
    $temporary = [
        "footerListFirst" => $firstListFooter
    ];
    // $temporaryB = [
    //     "footerListSecond" => $secondListFooter
    // $temporaryB in view
    // ];
    return view('index',$tmp,$temporary,);
});
