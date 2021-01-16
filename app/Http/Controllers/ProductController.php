<?php

namespace App\Http\Controllers;

use App\Product;
use App\SubServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $subservices = SubServices::all();
        return view('admin.product.create', compact('subservices'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'subservice' => 'required',
                'price' => 'required|numeric',
                'desc' => 'required',
                'status' => 'required'
            ]
        );

        Product::create([
            'product_name' => $request->name,
            'id_subservice' => $request->subservice,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->desc
        ]);

        return redirect()->route('product.index')->with('success', "Data berhasil ditambahkan");
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $subservices = SubServices::all();
        return view('admin.product.edit', compact('product', 'subservices'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'subservice' => 'required',
                'price' => 'required|numeric',
                'desc' => 'required',
                'status' => 'required'
            ]
        );

        Product::where('id', $id)->update([
            'product_name' => $request->name,
            'id_subservice' => $request->subservice,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->desc
        ]);
        return redirect()->route('product.index')->with('success', "Data berhasil diperbarui");
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back()->with('success', 'Data berhasil dihapus');
    }
}
