<?php

namespace App\Http\Controllers\Dashboard\Post;

use App\Models\User;
use App\Models\PostNew;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PostNewsController extends Controller
{
    public function index()
    {
        $categorys = PostCategory::orderBy('name')->where('status', '!=' , 0)->get();
        return view('dashboard.post.index', compact('categorys'));
    }

    public function data_table(Request $request)
    {

        $posts = PostNew::with('category', 'user');

        if ($request->category_id) {
            $posts = $posts->where('category_id', $request->category_id);
        }

        if ($request->status) {
            $posts = $posts->where('status', $request->status);
        }


        return DataTables::of($posts)
            ->addColumn('category', function ($row) {
                return $row->category->name;
            })
            ->addColumn('user', function ($row) {
                return $row->user->name;
            })
            ->addColumn('date', function ($row) {
                return date('d-M-Y', strtotime($row->created_at));
            })
            ->addColumn('action', function ($row) {
                $actions = '';
                $actions .= '<a href="' . route('dashboard.post.news.show', $row->slug) . '" class="btn btn-sm btn-secondary me-2 "><i class="bx bxs-show"></i></a>';
                $actions .= '<a href="' . route('dashboard.post.news.edit', $row->slug) . '" class="btn btn-sm btn-primary me-2 "><i class="bx bxs-edit"></i></a>';
                $actions .= '<button data-id="'.$row['slug'].'" class="btn btn-sm btn-danger btn-delete me-2"><i class="bx bxs-trash"></i></button>';
                return $actions;
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $categorys = PostCategory::orderBy('name')->where('status', '!=' , 0)->get();
        $users = User::orderBy('name')->get();
        return view('dashboard.post.create', compact('categorys','users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'keywords' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:draft,published,trashed',
        ]);


        // dd($request->all());

        $file_name = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $upload_path = public_path('storage/post/');
            $file_name = 'Post_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        }


            
        $post = PostNew::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'keywords' => $request->keywords,
            'tags' => $request->tags,
            'image' => $file_name,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.post.news.index')->with('success', 'Postingan Berhasil Dibuat');
    }

    public function show($slug)
    {
        $post = PostNew::where('slug', $slug)->first();
        return view('dashboard.post.show', compact('post'));
    }

    public function edit($slug)
    {
        $post = PostNew::where('slug', $slug)->first();
        $categorys = PostCategory::orderBy('name')->where('status', '!=' , 0)->get();
        $users = User::orderBy('name')->get();
        return view('dashboard.post.edit', compact('post', 'categorys', 'users'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'keywords' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'status' => 'required|in:draft,published,trashed',
        ]);

        $post = PostNew::where('slug', $slug)->first();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $upload_path = public_path('storage/post/');
            $file_name = 'Post_' . Str::slug(Str::random(6)) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name);
        } else {
            $file_name = $post->image;
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'keywords' => $request->keywords,
            'tags' => $request->tags,
            'image' => $file_name,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.post.news.index')->with('success', 'Postingan Berhasil Diperbarui');
    }

    public function destroy($slug)
    {
        $post = PostNew::where('slug', $slug)->first();
        $action = $post->delete();

        if ($action) {
            return response()->json(['status' => 'success', 'message' => 'Postingan Berhasil Dihapus']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Postingan Gagal Dihapus']);
        }

    }
}
