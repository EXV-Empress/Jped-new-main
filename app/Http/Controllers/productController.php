<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class productController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view('Adminmanagements', compact('products'));
    }
    public function create()
    {
        return view('productmanagements.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'photo' => 'required|mimes:png,jpg,jpeg,webp',
            'price' => 'required|integer',
            'details' => 'required|string',
            'category' => 'required|max:255|string',
        ]);

        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);
        }

        Products::create([
            'name' => $request->name,
            'photo' => $path . $filename,
            'price' => $request->price,
            'details' => $request->details,
            'category' => $request->category,
        ]);
        return redirect('productmanagements/create')->with('status', 'success');
    }

    public function edit(int $id)
    {
        $crud = Products::findOrFail($id);
        return view('productmanagements.edit', compact('crud'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'photo' => 'required|mimes:png,jpg,jpeg,webp',
            'price' => 'required|integer',
            'details' => 'required|string',
            'category' => 'required|max:255|string',
        ]);

        $products = Products::findOrFail($id);

        if ($request->has('photo')) {

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/category/';
            $file->move($path, $filename);

            if (File::exists($products->photo)) {
                File::delete($products->photo);
            }
        }

        Products::findOrFail($id)->update([
            'name' => $request->name,
            'photo' => $path . $filename,
            'price' => $request->price,
            'details' => $request->details,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('status', 'success');
    }
    public function destroy(int $id)
    {
        $products = Products::findOrFail($id);
        if (File::exists($products->photo)) {
            File::delete($products->photo);
        }
        $products->delete();

        return redirect()->back()->with('status', 'deleted');
    }
}