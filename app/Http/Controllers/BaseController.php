<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function news_details($id){
        return view("news-details",compact("id"));
    }
}
