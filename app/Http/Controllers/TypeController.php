<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;

class TypeController extends Controller
{
   
    function find($id){
        $type=Type::find($id);
        return $type;
    }
    
}
