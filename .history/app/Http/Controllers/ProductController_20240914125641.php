<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.list',[
    'products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric|min:1',
            // 'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ];
        //   Method 2
        if ($request->image != "") {
            $rules['image'] = 'image';
        }
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
        $product->save();
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            // Correct the path by adding a slash between the folder and image name
            $image->move(public_path('uploads/products'), $imageName);

            // Save the image name in the database
            $product->image = $imageName;
            $product->save();
        }

        // For image

        // Method 1
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('images', 'public'); // Store the image in 'public/images'
        //     $product->image = $imagePath;
        // }

        // Another method2

        //
        // Method 1
        // if ($product->save()) {
        //     return redirect()->route('products.index')->with('success', 'Product added successfully');
        // } else {
        //     dd('Error saving product'); // Debugging line
        // }


        // Another Way to redirect
        return redirect()->route('products.index')->with('success', ' Product added Successfully');
    }
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    public function update($id,Request $request) {
        $product = Product::findOrFail($id);
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric|min:1',
            // 'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ];
        //   Method 2
        if ($request->image != "") {
            $rules['image'] = 'image';
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.edit',$product->id)
                ->withErrors($validator)
                ->withInput();
        }

        // Databse

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
         // Delete old image if it exists
    $oldImagePath = public_path('uploads/products/' . $product->image);
    if (File::exists($oldImagePath)) {
        File::delete($oldImagePath);
    }
            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;

            // Correct the path by adding a slash between the folder and image name
            $image->move(public_path('uploads/products'), $imageName);

            // Save the image name in the database
            $product->image = $imageName;
            $product->save();
        }

        // For image

        // Method 1
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('images', 'public'); // Store the image in 'public/images'
        //     $product->image = $imagePath;
        // }

        // Another method2

        //
        // Method 1
        // if ($product->save()) {
        //     return redirect()->route('products.index')->with('success', 'Product added successfully');
        // } else {
        //     dd('Error saving product'); // Debugging line
        // }


        // Another Way to redirect
        return redirect()->route('products.index')->with('success', ' Product added Successfully');

    }
    public function destroy() {}
}
