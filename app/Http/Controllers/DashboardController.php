<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::orderBy('created_at', 'desc')->get();
        $orderByThisMonth = Order::whereMonth('created_at', Carbon::now()->month)->get();
        $orderByMonth =  [];
        $orderPaidByMonth =  [];
        $month = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'Septermber',
            'Oktober',
            'November',
            'Desember'
        ];
        for ($i = 0; $i <= 11; $i++) {

            $orderByMonth[$i] = Order::whereMonth('created_at', $i + 1)->get()->count();
            $orderPaidByMonth[$i] = Order::whereMonth('created_at', $i + 1)->where('status', 6)->get()->count();
            if (!$orderByMonth[$i]) {
                unset($month[$i]);
                unset($orderByMonth[$i]);
                unset($orderPaidByMonth[$i]);
            }
        }

        // \dd($month);

        return view('admin.dashboard', \compact('order', 'orderByThisMonth', 'orderByMonth', 'month', 'orderPaidByMonth'));
    }
}
