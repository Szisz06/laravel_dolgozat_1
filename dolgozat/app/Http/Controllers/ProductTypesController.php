<?php

namespace App\Http\Controllers;

use App\Models\Product_type;
use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    public function index(){ 

        return Product_type::all(); 

    } 

 

    public function show($id){ 

        $user = response()->json(Product_type::find($id)); 

        return $user; 

    } 

 

    public function store(Request $request){ 

        $user = new Product_type(); 

        $user->name = $request->name; 

        $user->description = $request->description; 

        $user->cost = $request->cost; 

        $user->save(); 

    } 

 

    public function update(Request $request, $id){ 

        $user = Product_type::find($id); 

        $user->name = $request->name; 

        $user->description = $request->description; 

        $user->cost = $request->cost; 

        $user->save(); 

    } 

 

    public function destroy($id){ 

        Product_type::find($id)->delete(); 

         

    } 

} 

