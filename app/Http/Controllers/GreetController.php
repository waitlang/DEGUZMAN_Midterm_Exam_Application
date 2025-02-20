<?php

namespace App\Http\Controllers;

class GreetController extends Controller
{
    public function greetMethod() {
        $data = [
            'name' => 'Mark'
        ];
        return view('greet', $data);
    }
}
