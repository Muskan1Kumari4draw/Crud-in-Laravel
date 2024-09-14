<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   public function index(){
    return view('products.list');
   }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric|min:1',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ];
        // Another way
// if ($request->image != ""){
//     $rules['image'] = 'image';
// }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Databse
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;

        // For image

    // Method 1
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('images', 'public'); // Store the image in 'public/images'
        //     $product->image = $imagePath;
        // }

        $product->save();
// Another method
        $imaage = $request->image;
        $ext =$image->getClientOriginalExtension();$imageName = time().'.'.$ext;

// save image to upload/products
$image->move(public_path('uploads/products').$imageName);
// save image
        $product->image = $imageName;
        $product->save();
        //
        // Method 1
        // if ($product->save()) {
        //     return redirect()->route('products.index')->with('success', 'Product added successfully');
        // } else {
        //     dd('Error saving product'); // Debugging line
        // }


        // Another Way to redirect
        return redirect()->route('products.index')->with('success'  ,' Product added Successfully');
    }
   public function edit(){

   }
   public function update(){

   }
   public function destroy(){

   }
}
