<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\PostNew;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $limit = 15;
        $berita_category_id = PostCategory::where('name', 'berita')->first()->id;

        // berita with views

        $beritas = PostNew::where('category_id', $berita_category_id)->where('status', 'published')->orderBy('created_at', 'desc')->paginate($limit);

        $categorys = PostCategory::orderBy('name')->get();

        if($request->name)
        {

        }

        return view('landing.berita.index', compact('beritas','categorys'));
    }

    public function show($slug)
    {
        // Pisahkan slug dan random string
        $parts = explode('.', $slug, 2);
        $realSlug = $parts[0] ?? null;
        $random = $parts[1] ?? null;


        if (!$realSlug) {
            abort(404);
        }

        $postNew = PostNew::where('slug', $realSlug)->first();

        if (!$postNew) {
            abort(404, 'Berita tidak ditemukan');
        }


        return view('landing.berita.show', compact('postNew'));
    }

}
