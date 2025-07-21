<?php

 
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

// Route::get('/details',function(){
//     return view('document.details');
// });

Route::get("/details",[DocumentController::class, "details_page"]);