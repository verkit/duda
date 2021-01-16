<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function showAjax($id)
    {
        $res = News::findOrFail($id);
        return view('guest.ajax',compact('res'));
    }
    public function indexGuest()
    {
        $news = News::orderBy('updated_at', 'desc')->where('isDraft', 0)->paginate(6);
        return view('guest.news', compact('news'));
    }
    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $category = NewsCategory::all();
        return view('admin.news.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cover' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'title' => 'required',
            'slug' => 'required|unique:news,slug',
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
                    $news_category = NewsCategory::create(['name' => $value]);
                    array_push($category, $news_category->id);
                } else {
                    array_push($category, $value);
                }
            }
        }

        $news =  News::create([
            'title' => $request->title,
            'isDraft' => $draft,
            'slug' => $slug,
            'cover' => $cover,
            'content' => $request->content,
        ]);

        $news->category()->attach($category);

        return redirect()->route('news.index')->with('success', "Blog berhasil ditambahkan");
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $category = NewsCategory::all();
        return view('admin.news.edit', compact('category', 'news'));
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

        $news = News::findOrFail($id);

        //update category
        $old_category = $news->category;
        // foreach ($news->category as $cat) {
        //     array_push($old_category, $cat);
        // }

        $category = [];
        if ($request->category != null) {
            foreach ($request->category as $value) {
                if (ctype_digit($value) == false) {
                    $news_category = NewsCategory::create(['name' => $value]);
                    array_push($category, $news_category->id);
                } else {
                    array_push($category, $value);
                }
            }
        }

        //update cover
        if ($request->cover != null) {
            Storage::delete('/public/images/' . $news->cover);
            $file = $request->file('cover');
            $cover = 'service-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 200)->save(storage_path('app/public/images/' . $cover));
            $news->cover = $cover;
        }

        if ($slug != $news->slug) {
            $news->slug = $slug;
        }

        News::where('id', $id)->update([
            'title' => $request->title,
            'isDraft' => $draft,
            'content' => $request->content,
        ]);

        $news->category()->detach($old_category);
        $news->category()->attach($category);

        return redirect()->route('news.index')->with('success', "Blog berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->category()->detach();
        $news->delete();
        return redirect()->route('news.index')->with('success', "Blog berhasil dihapus");
    }
}
