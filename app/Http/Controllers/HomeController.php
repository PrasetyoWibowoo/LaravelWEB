<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }

    public function about(){
        $data = [
            'name'    => 'Prasetyo Wibowo',
            'age'     => 16,
            'address' => 'Gg.Singer',
            'hobby'   => 'Coding',
            'email'   => 'wibowoprasetyo40@gmail.com'

        ];
        return view('about', $data);
    }
}