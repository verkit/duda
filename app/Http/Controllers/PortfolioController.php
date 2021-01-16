<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::orderBy('updated_at', 'desc')->get();
        return view('admin.portfolio.index', compact('portfolio'));
    }

    public function create()
    {
        $category = PortfolioCategory::all();
        return view('admin.portfolio.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cover' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'title' => 'required',
            'slug' => 'required|unique:portfolios,slug',
            'content' => 'required',
            'category' => 'nullable',
            'files' => 'nullable',
        ]);


        $slug = str_replace(' ', '-', strtolower($request->slug));
        $file = $request->file('cover');
        $cover = 'service-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
        Image::make($file)->resize(300, 200)->save(storage_path('app/public/images/' . $cover));

        $draft = 1;
        if ($request->draft != null) {
            $draft = $request->draft;
        }

        $category = [];
        if ($request->category != null) {
            foreach ($request->category as $value) {
                if (ctype_digit($value) == false) {
                    $portfolio_category = PortfolioCategory::create(['name' => $value]);
                    array_push($category, $portfolio_category->id);
                } else {
                    array_push($category, $value);
                }
            }
        }

        $portfolio =  Portfolio::create([
            'title' => $request->title,
            'isDraft' => $draft,
            'slug' => $slug,
            'cover' => $cover,
            'content' => $request->content,
        ]);

        $portfolio->category()->attach($category);

        return redirect()->route('portfolio.index')->with('success', "Portfolio berhasil ditambahkan");
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $category = PortfolioCategory::all();
        return view('admin.portfolio.edit', compact('category', 'portfolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cover' => 'nullable|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category' => 'nullable',
            'files' => 'nullable',
        ]);

        $slug = str_replace(' ', '-', strtolower($request->slug));

        $draft = 1;
        if ($request->draft != null) {
            $draft = $request->draft;
        }

        $portfolio = Portfolio::findOrFail($id);

        //update category
        $old_category = $portfolio->category;
        // foreach ($portfolio->category as $cat) {
        //     array_push($old_category, $cat);
        // }

        $category = [];
        if ($request->category != null) {
            foreach ($request->category as $value) {
                if (ctype_digit($value) == false) {
                    $portfolio_category = PortfolioCategory::create(['name' => $value]);
                    array_push($category, $portfolio_category->id);
                } else {
                    array_push($category, $value);
                }
            }
        }

        //update cover
        if ($request->cover != null) {
            Storage::delete('/public/images/' . $portfolio->cover);
            $file = $request->file('cover');
            $cover = 'service-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 200)->save(storage_path('app/public/images/' . $cover));
            $portfolio->cover = $cover;
        }

        if ($slug != $portfolio->slug) {
            $portfolio->slug = $slug;
        }

        Portfolio::where('id', $id)->update([
            'title' => $request->title,
            'isDraft' => $draft,
            'content' => $request->content,
        ]);

        $portfolio->category()->detach($old_category);
        $portfolio->category()->attach($category);

        return redirect()->route('portfolio.index')->with('success', "Portfolio berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->category()->detach();
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', "Portfolio berhasil dihapus");
    }
}
