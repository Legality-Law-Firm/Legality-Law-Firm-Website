<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index() {
        $params = [
            'title' => 'Home'
        ];
        return view('home', $params);
    }

}
