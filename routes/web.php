<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
 

Route::get('/', function () {
    return view('welcome');
});
 
Route::get("/home/{isim}", [Home::class, 'test']); //çift tırnak içine hangi değeri koyduysak url de onu çağırır 
