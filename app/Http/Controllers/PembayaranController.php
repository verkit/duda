<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use \App\Payment;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $cek = Payment::where('invoice',$request->invoice)
            ->where('deadline',">",Carbon::now())
            ->first();
        if (!$cek) {
             return response()->json('fail');
        }else{
            $tempatfile = ('FotoPembayaran');
            $filenya = $request->file('inpFile');
            $nama_file = $filenya->getClientOriginalName();
            $filenya->move($tempatfile, $nama_file);
            Payment::where('invoice',$request->invoice)
                ->update([
                    'id_bank'   => $request->idBank,
                    'sender'    => $request->sender,
                    'evidence'  => $nama_file, 
                    'note'      => $request->note,
                    'status'    => "pending",
                ]);

            return response()->json('ok');
        } 
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
