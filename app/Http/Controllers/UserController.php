<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function user($id,$nama)
    {
        return view('User')
        ->with('name',$nama)
        ->with('id',$id);
    }
};