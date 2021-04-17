<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateAPIController extends Controller
{
    public function index() {
        $data = [
            ['id' => 1, 'name' => 'Product 1', 'price' => 110.50],
            ['id' => 2, 'name' => 'Product 2', 'price' => 10.50],
        ];

       return response()->json($data);
    }
}
