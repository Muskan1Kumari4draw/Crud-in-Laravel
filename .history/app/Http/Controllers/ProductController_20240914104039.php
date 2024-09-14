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
    $rules = [
        'name' => 'required|min=5',
        'sku' => 'required|min=3',
        'price' =>'required|numeric|min=1',

    ]
$validator = validator::make($request-all(),);
if($validator->fails()){
    return redirect()->route('products.create')->withInput();
}
   }
   public function edit(){

   }
   public function update(){

   }
   public function destroy(){

   }
}
