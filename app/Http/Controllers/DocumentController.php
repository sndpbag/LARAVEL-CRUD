<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   public function details_page()
    {
        $name = User::all();
        return view("document.details",compact("name"));
    }
}
