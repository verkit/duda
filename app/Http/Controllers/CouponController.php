<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\CouponDetail;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupon.index', compact('coupons'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.coupon.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'code' => 'required|unique:coupons,code',
                'discount' => 'required|numeric|between:0,100',
                'start' => 'required',
                'desc' => 'nullable',
                'end' => 'required',
                'status' => 'required'
            ]
        );

        $start = Carbon::createFromFormat('d/m/Y', $request->start)->format('Y-m-d');
        $end = Carbon::createFromFormat('d/m/Y', $request->end)->format('Y-m-d');

        Coupon::create([
            'name' => $request->name,
            'code' => $request->code,
            'discount' => $request->discount,
            'start' => $start,
            'end' => $end,
            'description' => $request->desc,
            'status' => $request->status
        ]);

        return redirect()->route('coupon.index')->with('success', "Data berhasil ditambahkan");
    }

    public function edit($id)
    {
        $coupon = Coupon::find($id);
        $coupon_products = CouponDetail::where('id_coupon', $id)->get();

        $products = Product::all();

        $start = Carbon::createFromFormat('Y-m-d', $coupon->start)->format('d/m/Y');
        $end = Carbon::createFromFormat('Y-m-d', $coupon->end)->format('d/m/Y');

        return view('admin.coupon.edit', compact('products', 'coupon', 'coupon_products', 'start', 'end'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'code' => 'required|unique:coupons,code',
                'discount' => 'required|numeric|between:0,100',
                'start' => 'required',
                'end' => 'required',
                'status' => 'required',
                'desc' => 'nullable'
            ]
        );

        $start = Carbon::createFromFormat('d/m/Y', $request->start)->format('Y-m-d');
        $end = Carbon::createFromFormat('d/m/Y', $request->end)->format('Y-m-d');

        Coupon::where('id', $id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'discount' => $request->discount,
            'start' => $start,
            'end' => $end,
            'description' => $request->desc,
            'status' => $request->status
        ]);
        return redirect()->route('coupon.index')->with('success', "Data berhasil diperbarui");
    }

    public function add_product(Request $request, $id){
        $request->validate([
            'product' => 'required'
        ]);

        CouponDetail::create([
            'id_coupon' => $id,
            'id_product' => $request->product
        ]);

        return back()->with('success', "Berhasil menambahkan product");
    }

    public function delete_product($id){
        CouponDetail::destroy($id);
        return back()->with('success', "Data berhasil dihapus");
    }
}
