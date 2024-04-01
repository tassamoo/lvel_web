<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('author.home'); //folder yang di akses dan pathnya
    }
}
