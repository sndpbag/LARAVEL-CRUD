<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
   public function details_page()
    {
        $name = "sndp bag";
        return view("document.details",compact("name"));
    }
}
