<?php

namespace App\Http\Controllers\Api;

use App\Coupon;
use App\CouponDetail;
use App\Http\Controllers\Controller;
use App\Product;
use App\SubServices;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function service($id)
    {
        $subServices = SubServices::where([['id_service', '=', $id], ['status', '=', 'aktif']])->get();
        return json_encode($subServices);
    }

    public function subservice($id)
    {
        $subServices = Product::where([['id_subservice', '=', $id], ['status', '=', 'aktif']])->get();
        return json_encode($subServices);
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);
        return json_encode($product);
    }

    public function product_coupon($product, $code)
    {
        $coupon = Coupon::where([['code', '=', $code], ['status', '=', 'aktif']])->first();
        if (!$coupon) {
            // return response()->json(['Coupon not found']);
            return json_encode($coupon);
        }

        $product_coupon = CouponDetail::where('id_coupon',$coupon->id)->where('id_product', $product)->first();
        if (!$product_coupon) {
            return json_encode($product_coupon);
        }

        return json_encode($product_coupon->coupon);
    }

    public function coupon($code)
    {
        $coupon = Coupon::where([['code', '=', $code], ['status', '=', 'aktif']])->first();
        return json_encode($coupon);
    }
}
