<?php

namespace App\Http\Controllers;

use App\SubServices;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    public function store(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        SubServices::create([
            'sub_service_name' => $request->name,
            'id_service' => $id,
            'status' => $request->status,
            'description' => $request->description
        ]);

        return back()->with('success', "Data berhasil ditambahkan");
    }

    public function edit($id, $id_sub){
        $sub = SubServices::findOrFail($id_sub);
        return view('admin.service.subservice.edit', compact('sub'));
    }

    public function update(Request $request, $id, $sub){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        SubServices::where('id', $sub)->update([
            'sub_service_name' => $request->name,
            'id_service' => $id,
            'status' => $request->status,
            'description' => $request->description
        ]);

        return redirect()->route('service.edit', $id)->with('success', "Data berhasil diperbarui");
    }

    public function destroy($id, $sub)
    {
        SubServices::destroy($sub);
        return back()->with('success', 'Data berhasil dihapus');
    }

}
