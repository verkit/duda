<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::all();
        return view('admin.payment.index', compact('payments'));
    }

    public function show($id){
        $payment = Payment::findOrFail($id);
        $order = Order::where('invoice', $payment->invoice)->first();
        return view('admin.payment.show', compact('payment', 'order'));
    }

    public function update(Request $request, $id){
        Payment::where('id', $id)->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Berhasil mengganti status');
    }

    public function find(Request $request){
        $payments = Payment::where('invoice', $request->invoice)->get();
        return view('admin.payment.index', compact('payments'));
    }
}
