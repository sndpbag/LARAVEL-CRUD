<?php

 
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

// Route::get('/details',function(){
//     return view('document.details');
// });

Route::get("/details",[DocumentController::class, "details_page"])->name("user.index");
Route::get("/create",[DocumentController::class, "create"]);
Route::post("/store",[DocumentController::class, "store"])->name("user.create");
Route::get("/edit_page/{id}",[DocumentController::class, "edit_page"])->name("user.edit");