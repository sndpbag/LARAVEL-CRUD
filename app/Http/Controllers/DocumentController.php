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

    public function create()
    {
        return view("document.create");
    }


    public function store(Request $request)
    {



       User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "mobile"=> $request->mobile,
            "password"=> $request->password,

       ]);

       return redirect()->route("user.index");
    }
}
