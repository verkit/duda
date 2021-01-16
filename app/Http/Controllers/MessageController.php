<?php

namespace App\Http\Controllers;

use \App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function store(Request $request)
    {
        Message::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'subject'    => $request->subject,
            'status'     => 'pending',
            'message'    => $request->message,
        ]);
        return redirect()->back()->with('sukses','Berhasil mengirim pesan');
    }

     public function index(){
        $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    public function show($id){
        $message = Message::findOrFail($id);
        return view('admin.message.show', compact('message'));
    }

    public function pending($id){

        Message::where('id', $id)->update([
            'status' => 'pending'
        ]);

        return redirect()->route('message.index')->with('success', 'Berhasil memperbarui status');
    }

    public function responded($id){

        Message::where('id', $id)->update([
            'status' => 'responded'
        ]);

        return redirect()->route('message.index')->with('success', 'Berhasil memperbarui status');
    }
}
