<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Associate extends Controller
{
    public function index() {
        $params = [
            'title' => 'Meet Our Associates'
        ];
        return view('associate', $params);
    }
}
