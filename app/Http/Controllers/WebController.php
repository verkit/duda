<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $notification = Notification::orderBy('updated_at', 'desc')->get();
        return view('admin.notification.index', compact('notification'));
    }

    public function create()
    {
        return view('admin.notification.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $draft = 1;
        if ($request->draft != null) {
            $draft = $request->draft;
        }

        Notification::create([
            'title' => $request->title,
            'isDraft' => $draft,
            'content' => $request->content,
        ]);

        return redirect()->route('web.index')->with('success', "Notifikasi berhasil ditambahkan");
    }

    public function edit($id)
    {
        $notification = Notification::findOrFail($id);
        return view('admin.notification.edit', compact('notification'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $draft = 1;
        if ($request->draft != null) {
            $draft = $request->draft;
        }

        Notification::where('id', $id)->update([
            'title' => $request->title,
            'isDraft' => $draft,
            'content' => $request->content,
        ]);

        return redirect()->route('web.index')->with('success', "Notifikasi berhasil ditambahkan");
    }

    public function destroy($id)
    {
        Notification::destroy($id);
        return redirect()->route('web.index')->with('success', "Notifikasi berhasil dihapus");
    }
}
