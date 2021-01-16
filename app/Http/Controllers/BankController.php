<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::all();
        return view('admin.bank.index', compact('banks'));
    }

    public function create()
    {
        return view('admin.bank.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'account_number' => 'required|regex:/^[0-9]+$/',
                'account_name' => 'required',
                'status' => 'required'
            ]
        );

        Bank::create([
            'bank_name' => $request->name,
            'account_number' => $request->account_number,
            'account_owner' => $request->account_name,
            'status' => $request->status
        ]);

        return redirect()->route('bank.index')->with('success', "Data berhasil ditambahkan");
    }

    public function edit($id)
    {
        $bank = Bank::find($id);
        return view('admin.bank.edit', compact('bank'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'account_number' => 'required|regex:/^[0-9]+$/',
                'account_name' => 'required',
                'status' => 'required'
            ]
        );

        Bank::where('id', $id)->update([
            'bank_name' => $request->name,
            'account_number' => $request->account_number,
            'account_owner' => $request->account_name,
            'status' => $request->status
        ]);
        return redirect()->route('bank.index')->with('success', "Data berhasil diperbarui");
    }

    public function delete($id)
    {
        Bank::destroy($id);
        return back()->with('success', 'Data berhasil dihapus');
    }
    public function getData()
    {
        $bank = Bank::All();
        return response()->json($bank);
    }
}
