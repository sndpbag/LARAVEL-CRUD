<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function details_page()
    {
        return view("document.details");
    }
}
