<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function foodBeverage(){
        return view('foodBeverage');

    }
    public function HomeCare(){
        return view('HomeCare');

    }
    public function beautyHealth(){
        return view('beautyHealth');

    }
    public function BabyKid(){
        return view('BabyKid');

    }
}