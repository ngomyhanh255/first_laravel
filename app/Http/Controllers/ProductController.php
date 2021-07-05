<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function list(){
        return 'Hello World product';
    }
    function create(Request $request){
        $payload = $request->all();
        $productCreate = Product::create($payload);
        return response()->json([
            'status' => true,
            'data'   => $productCreate
        ]);
    }
}
