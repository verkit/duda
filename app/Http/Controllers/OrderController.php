<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Order;
use App\OrderStatus;
use App\Payment;
use App\Service;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        $services = Service::all();
        $order_statuses = OrderStatus::all();
        return view('admin.order.index', compact('orders', 'services', 'order_statuses'));
    }

    public function search(Request $request)
    {
        if (ctype_digit($request->product) == false) {
            $request->product = null;
        }

        $filters = [
            'status' => $request->input('status'),
            'id_product' => $request->product,
            'date' => $request->input('date'),
            'invoice' => $request->input('invoice'),
        ];

        $orders = Order::where(function ($query) use ($filters) {
            if ($filters['status']) {
                $query->where('status', '=', $filters['status']);
            }
            if ($filters['id_product']) {
                $query->where('id_product', '=', $filters['id_product']);
            }
            if ($filters['date']) {
                $query->whereDate('created_at', '=', date("Y-m-d", strtotime($filters['date'])));
            }
            if ($filters['invoice']) {
                $query->where('invoice', '=', $filters['invoice']);
            }
        })->get();

        $services = Service::all();
        $order_statuses = OrderStatus::all();
        return view('admin.order.index', compact('orders', 'services', 'order_statuses'));
    }


    public function create()
    {
        $services = Service::all();
        $order_statuses = OrderStatus::all();
        return view('admin.order.create', compact('services', 'order_statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'price' => 'required',
            'total' => 'required',
            'link' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'discount' => 'nullable',
            'code' => 'nullable',
            'khusus' => 'nullable',
            'status' => 'nullable',
        ]);


        $invoice = mb_substr(Carbon::now()->year, -2) . Carbon::now()->dayOfYear() . Carbon::now()->secondsSinceMidnight();

        if (ctype_digit($request->status) == false) {
            $request->status = null;
        }

        if ($request->code == null) {
            Order::create([
                'id_product' => $request->product,
                'id_admin' => 1,
                'invoice' => $invoice,
                'link' => $request->link,
                'price' => $request->total,
                'name' => $request->name,
                'email' => $request->email,
                'hp' => $request->hp,
                'links_keyword' => $request->khusus,
                'status' => $request->status
            ]);
        } else {
            $coupon = Coupon::where('code', $request->code)->first();
            Order::create([
                'id_product' => $request->product,
                'id_admin' => 1,
                'id_coupon' => $coupon->id,
                'invoice' => $invoice,
                'link' => $request->link,
                'price' => $request->total,
                'name' => $request->name,
                'email' => $request->email,
                'hp' => $request->hp,
                'links_keyword' => $request->khusus,
                'status' => $request->status
            ]);
        }

        Payment::create([
            'invoice' => $invoice,
            'deadline' => CarbonImmutable::now()->add(1, 'day'),
            'status' => 'pending',
        ]);

        return redirect()->route('order.create')->with('success', "Pembuatan order baru 'Berhasil' dengan detail sebagai berikut:<br><br>
        DETAIL TAGIHAN:<br>
        ================<br>
        Total tagihan: Rp $request->total<br>
        No Invoice/Trx: #$invoice<br>
        Cek status order anda di<br>
        https://duda.co.id/check/<br>
        ================<br><br>
        - Setelah melakukan pembayaran segera lakukan 'KONFIRMASI' dengan menyertakan foto/screenshot bukti pembayaran<br>
        - Tinggalkan pesan melalui contac us dengan judul  'SUDAH BAYAR' dan 'Nomor Invoice' agar pesan anda diprioritaskan.<br>
        <br>
        Terimakasih");
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $services = Service::all();
        $order_statuses = OrderStatus::all();
        return view('admin.order.edit', compact('services', 'order', 'order_statuses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product' => 'required',
            'price' => 'required',
            'total' => 'required',
            'link' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'discount' => 'nullable',
            'code' => 'nullable',
            'khusus' => 'nullable',
            'status' => 'nullable',
        ]);


        $invoice = mb_substr(Carbon::now()->year, -2) . Carbon::now()->dayOfYear() . Carbon::now()->secondsSinceMidnight();

        if (ctype_digit($request->status) == false) {
            $request->status = null;
        }

        if ($request->code == null) {
            Order::where('id', $id)->update([
                'id_product' => $request->product,
                'id_admin' => 1,
                'invoice' => $invoice,
                'link' => $request->link,
                'price' => $request->total,
                'name' => $request->name,
                'email' => $request->email,
                'hp' => $request->hp,
                'links_keyword' => $request->khusus,
                'status' => $request->status
            ]);
        } else {
            $coupon = Coupon::where('code', $request->code)->first();
            Order::where('id', $id)->update([
                'id_product' => $request->product,
                'id_admin' => 1,
                'id_coupon' => $coupon->id,
                'invoice' => $invoice,
                'link' => $request->link,
                'price' => $request->total,
                'name' => $request->name,
                'email' => $request->email,
                'hp' => $request->hp,
                'links_keyword' => $request->khusus,
                'status' => $request->status
            ]);
        }

        Payment::create([
            'invoice' => $invoice,
            'deadline' => CarbonImmutable::now()->add(1, 'day'),
            'status' => 'pending',
        ]);

        return redirect()->route('order.index')->with('success', 'Berhasil memperbarui data');
    }

    // public function delete($id)
    // {
    //     Order::create([]);

    //     return;
    // }

    public function customstore(Request $request)
    {

        $request->validate([
            'product' => 'required',
            'price' => 'required|numeric',
            'link' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'khusus' => 'nullable',
            'status' => 'nullable',
        ]);

        $invoice = mb_substr(Carbon::now()->year, -2) . Carbon::now()->dayOfYear() . Carbon::now()->secondsSinceMidnight();
        if (ctype_digit($request->status) == false) {
            $request->status = null;
        }
        Order::create([
            'custom_product' => $request->product,
            'id_admin' => 1,
            'invoice' => $invoice,
            'link' => $request->link,
            'price' => $request->price,
            'name' => $request->name,
            'email' => $request->email,
            'hp' => $request->hp,
            'links_keyword' => $request->khusus,
            'status' => $request->status
        ]);

        return redirect()->route('order.create')->with('success', "Pembuatan order baru 'Berhasil' dengan detail sebagai berikut:<br><br>
        DETAIL TAGIHAN:<br>
        ================<br>
        Total tagihan: Rp $request->price<br>
        No Invoice/Trx: #$invoice<br>
        Cek status order anda di<br>
        https://duda.co.id/check/<br>
        ================<br><br>
        - Setelah melakukan pembayaran segera lakukan 'KONFIRMASI' dengan menyertakan foto/screenshot bukti pembayaran<br>
        - Tinggalkan pesan melalui contac us dengan judul  'SUDAH BAYAR' dan 'Nomor Invoice' agar pesan anda diprioritaskan.<br>
        <br>
        Terimakasih");
    }

    public function customedit($id)
    {
        $order = Order::findOrFail($id);
        $order_statuses = OrderStatus::all();
        return view('admin.order.custom-edit', compact('order', 'order_statuses'));
    }

    public function customupdate(Request $request, $id)
    {
        $request->validate([
            'product' => 'required',
            'price' => 'required|numeric',
            'link' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'khusus' => 'nullable',
            'status' => 'nullable',
        ]);


        $invoice = mb_substr(Carbon::now()->year, -2) . Carbon::now()->dayOfYear() . Carbon::now()->secondsSinceMidnight();

        if (ctype_digit($request->status) == false) {
            $request->status = null;
        }

        Order::where('id', $id)->update([
            'custom_product' => $request->product,
            'id_admin' => 1,
            'invoice' => $invoice,
            'link' => $request->link,
            'price' => $request->price,
            'name' => $request->name,
            'email' => $request->email,
            'hp' => $request->hp,
            'links_keyword' => $request->khusus,
            'status' => $request->status
        ]);

        return redirect()->route('order.index')->with('success', 'Berhasil memperbarui data');
    }
}
