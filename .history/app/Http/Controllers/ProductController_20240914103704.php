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
        'name' => 'required|min=5'
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
