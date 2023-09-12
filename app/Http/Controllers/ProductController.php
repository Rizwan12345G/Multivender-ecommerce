<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $imageColumn = [];
        return view('admin.product.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.add', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'discount' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);

            // Store only the filename in the "img" attribute
            $validatedData['img'] = $fileName;
        }



        // Create the product
        Product::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.product.all')->with('success', 'Product added successfully.');
    }




    public function edit(Product $product)
    {
        // Fetch the categories if needed
        $categories = Category::all();

        // Load the edit view with the product data
        return view('admin.product.edit', compact('product', 'categories'));
    }


    public function destroy(Product $product)
    {

        $product->delete();
        return redirect()->back()
            ->with('success', 'Product Deleted .');
    }

    public function show(Product $product)
    {
        //
    }
    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0.01',
            'discount' => 'required|numeric|min:0',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can adjust the image validation rules
        ]);

        // Update the product data
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount = $request->discount;

        // Handle image update if a new image is provided
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            $product->img = $fileName;
        }

        $product->save();

        return redirect()->route('admin.product.all')->with('success', 'Product updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */


    // public function image_upload(Request $request)
    // {
    public function image_upload(Request $request)
    {



        // return response()->json([
        //     'error' => 'No file provided'
        // ], 400);
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
}
