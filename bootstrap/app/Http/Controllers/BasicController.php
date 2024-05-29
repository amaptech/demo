<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
function index(){
    return view('index');
}

function get_contact(){
    return view('contact');
}

function about(){
    return view('about');
}

function get_products($name){
    return view('products',compact('name'));
}
}