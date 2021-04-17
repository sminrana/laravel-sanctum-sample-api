<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicAPIController extends Controller
{
    public function index() {
        $data = [
            ['id' => 1, 'name' => 'Product 1', 'price' => 110.50],
            ['id' => 2, 'name' => 'Product 2', 'price' => 10.50],
            ['id' => 3, 'name' => 'Product 3', 'price' => 50.00]
        ];

       return response()->json($data);
    }
}
