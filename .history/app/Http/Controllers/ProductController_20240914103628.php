<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){

   }
   public function create(){
return view('products.create');
   }

   public function store(Request $request){
    $rules = {
        'name' =>'required|string|max:255',
        'description' =>'required|string|max:255',
        'price' =>'required|numeric',
        'quantity' =>'required|numeric',
        'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    }
validator::make($request-all(),);
   }
   public function edit(){

   }
   public function update(){

   }
   public function destroy(){

   }
}
