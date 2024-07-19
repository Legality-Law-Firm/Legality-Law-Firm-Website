<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Patner extends Controller
{
    public function index() {
        $params = [
            'title' => 'Meet Our Patner'
        ];
        return view('patner', $params);
    }
}
