<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.all', ['categories' => category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $file = $request->file('img');
        $fileName = time() . '.' . $request->img->extension();
        $file->move(public_path('images'), $fileName);

        $category = new category();
        $category->name = $request->input('name');
        $category->img = $fileName;
        $category->save();
        return redirect()->back()->with('success', 'category has been successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $category->name = $request->name;

        if ($request->has('img')) {
            File::delete(public_path('images') . '/' . $category->img);
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $category->img = $imageName;
        }
        $category->save();
        return redirect()->back()->with('success', 'category has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        File::delete(public_path('images') . '/' . $category->img);
        $category->delete();
        return redirect()->back();
    }
}
