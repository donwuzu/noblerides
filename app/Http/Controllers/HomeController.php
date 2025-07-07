<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index() {
        return view('welcome');
    }

    public function services() {
        return view('services');
    }

    public function about() {
        return view('about');
    }
}
