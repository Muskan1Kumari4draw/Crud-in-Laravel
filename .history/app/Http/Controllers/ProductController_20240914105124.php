<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   public function index(){

   }
   public function create(){
return view('products.create');
   }
   public function store(Request $request){
    $rules = [
        'name' => 'required|min:5',
        'sku' => 'required|min:3',
        'price' => 'required|numeric|min:1',
    ];

    $validator = validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->route('products.create')
                         ->withErrors($validator)
                         ->withInput();
    }
}

   public function edit(){

   }
   public function update(){

   }
   public function destroy(){

   }
}
