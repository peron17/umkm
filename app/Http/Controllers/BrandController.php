<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data = Brand::paginate(10);
        return view('brand.index', compact('data'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        Brand::create($request->all());

        return redirect()->route('brand.index')->with('success', 'Brand created successfully');
    }

    public function show(Brand $brand)
    {
        return view('brand.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $brand->update($request->all());

        return redirect()->route('brand.show', $brand->id)->with('success', 'Brand updated successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brand.index')->with('success', 'Brand deleted');
    }
}
