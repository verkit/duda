<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Order;
use App\Payment;
use App\Coupon;
use App\CouponDetail;
use App\Service;
use App\SubService;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postPesanSkrg(Request $request)
    {
        $invoice = mb_substr(Carbon::now()->year, -2) . Carbon::now()->dayOfYear() . Carbon::now()->secondsSinceMidnight();
        $hu = Order::create([
            'id_product' => $request->id_product,
            'id_coupon' => $request->id_coupon,
            'invoice' => $invoice,
            'link' => $request->link,
            'price' => (int)$request->price,
            'name' => $request->name,
            'email' => $request->email,
            'hp' => $request->hp,
            'catatan' => $request->catatan,
            'status' => 1,
            'links_keyword' => $request->links_keyword,
            'custom_product' => $request->custom_product,
        ]);
        Payment::create([
            'invoice' => $hu->invoice,
            'deadline' => $hu->created_at->addDays(1),
            'status' => 'pending'
        ]);
        if (!$hu) {
            return response()->json(['msg' => 'gagal']);
        }else{
            return response()->json(['msg' => 'ok']);            
        }

    }

    public function pesanSekarang(Request $request)
    {
        
    }

    public function cekKupon(Request $request)
    {
        $kupon = Coupon::where('code',$request->kodeKupon)->first();
        if (!$kupon) {
            return response()->json(['msg' => "kuponGaada"]);
        }
        $idP = (int)str_replace('produk', '', $request->idProduk);
        $produk = Product::whereId($idP)->first();
        foreach ($kupon->detail as $res) {
            if ($res->id_product==$idP) {
                return response()->json([
                    'msg' => "ok",
                    'idKupon' => $kupon->id,
                    'namaKupon' => $kupon->name,
                    'diskonKupon' => $kupon->discount,
                    'hargaAwal' => $produk->price,
                    'hargaAkhir' => (($produk->price) - ($produk->price)*($kupon->discount/100)),
                ]);
            }else{
                return response()->json(['msg' => "produkGacocok"]);                
            }
        }
        // CouponDetail::where('id_coupon',$kupon->id)->get();}
        // if ($kupon) {
        // }
    }
    public function selectedLayanan(Request $request)
    {
        $layanan = Service::whereId($request->layanan_id)->get();
        return response()->json($layanan);
    }
    public function selectedCategory(Request $request)
    {
        $kategori = SubService::whereId($request->kategori_id)->get();
        return response()->json($kategori);
    }
    public function selectedProduct(Request $request)
    {
        $idP = (int)str_replace('produk', '', $request->product_id);

        $produk = Product::whereId($idP)->get();
        return response()->json($produk);
    }
    public function index()
    {
        $layanan = Service::All();
        return view('guest.pesan-sekarang', compact('layanan'));
    }
    public function kategori(Request $request)
    {
        $id_layanan = $request->layanan_id;
        $kategori_layanan = SubService::where('id_service','=', $id_layanan)->get();
        return response()->json($kategori_layanan);
    }
    public function produk(Request $request)
    {
        $id_kategori = $request->kategori_id;
        $produk = Product::where('id_subservice','=', $id_kategori)->get();
        $cek = Product::where('id_subservice',$id_kategori)->first();
        if (!empty($cek)) {
            return response()->json($produk);
        }else{
            return response()->json(array([
                "id" => 0,
                "name" => "nothing",
            ]));
        }
    }
    public function cek(Request $request)
    {
        $hasil = Payment::where('invoice',$request->id)->first();
        if($hasil){
            $name = $hasil->name;
            $id = $hasil->id;
            return response()->json([
                'msg' => 'ada',
                'name' => $name,
                'id' => $id,
                'batas_pembayaran' => date("Y-m-d", strtotime($hasil->deadline)),
                'noTrx' => $hasil->invoice,
                'senderName' => $hasil->sender,
            ]);
        }
    }
    public function refreshCaptcha()
    {
        return captcha_img();
    }
    public function cekCaptcha(Request $request)
    {
        // $val = $this->validate($request, [
        //     'captcha' => 'required|valid_captcha'
        // ]);
        $val = Validator::make($request->all(), [
            'captcha' => 'required|captcha',
        ]);

        if ($val->fails()) {
            return response()->json(['msg'=> 'gagal']);
        }else{
            return response()->json(['msg'=> 'ok']);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
