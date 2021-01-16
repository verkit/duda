<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'cover' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'name' => 'required',
            'slug' => 'required|unique:services,slug',
            'desc' => 'required',
            'status' => 'required'
        ]);

        $slug = str_replace(' ', '-', strtolower($request->slug));
        $file = $request->file('cover');
        $cover = 'service-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(300, 200)->save(storage_path('app/public/images/' . $cover));

        Service::create([
            'service_name' => $request->name,
            'status' => $request->status,
            'slug' => $slug,
            'cover' => $cover,
            'description' => $request->desc
        ]);

        return redirect()->route('order.index')->with('success', "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $subservices = SubServices::where('id_service', $id)->get();

        return view('admin.service.edit', compact('service', 'subservices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $service = Service::findOrFail($id);
        if ($request->cover != null && $request->slug != $service->slug) {
            $request->validate([
                'cover' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
                'name' => 'required',
                'slug' => 'required|unique:services,slug',
                'desc' => 'required',
                'status' => 'required'
            ]);

            $slug = str_replace(' ', '-', strtolower($request->slug));

            Storage::delete('/public/images/' . $service->cover);

            $file = $request->file('cover');
            $cover = 'service-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 200)->save(storage_path('app/public/images/' . $cover));

            Service::where('id', $id)->update([
                'service_name' => $request->name,
                'status' => $request->status,
                'slug' => $slug,
                'cover' => $cover,
                'description' => $request->desc
            ]);
        } else if ($request->cover != null) {
            $request->validate([
                'cover' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
                'name' => 'required',
                'desc' => 'required',
                'status' => 'required'
            ]);

            Storage::delete('/public/images/' . $service->cover);

            $file = $request->file('cover');
            $cover = 'service-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 200)->save(storage_path('app/public/images/' . $cover));

            Service::where('id', $id)->update([
                'service_name' => $request->name,
                'status' => $request->status,
                'cover' => $cover,
                'description' => $request->desc
            ]);
        } else if ($request->slug != $service->slug) {
            $request->validate([
                'name' => 'required',
                'slug' => 'required|unique:services,slug',
                'desc' => 'required',
                'status' => 'required'
            ]);

            $slug = str_replace(' ', '-', strtolower($request->slug));

            Service::where('id', $id)->update([
                'service_name' => $request->name,
                'status' => $request->status,
                'slug' => $slug,
                'description' => $request->desc
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'desc' => 'required',
                'status' => 'required'
            ]);

            Service::where('id', $id)->update([
                'service_name' => $request->name,
                'status' => $request->status,
                'description' => $request->desc
            ]);
        }

        return redirect()->route('service.index')->with('success', "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Storage::delete('/public/images/' . $service->cover);
        Service::destroy($id);
        return back()->with('success', 'Data berhasil dihapus');
    }
}
