<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        return view(
            "post",
            [
                "title" => "Blog",
                "blog" => Post::with(['user', 'category'])->latest()->get(),
                // "blog" => Post::all(), ini terlalu berat di query jadi mengunakan clockwork untuk meringankan query
                // "variable" => nama_model::methotd

                // eger loding 
                // "blog" => Post::with(['user', 'category'])->latest()->get(),
                // menambahkan with() unutk meringankan query
                // latest() ambil data descending
                // get() ambil data
            ]
        ); // viewnya

    }

    public function show(Post $post)
    {
        // pada dasarnya pencarian pake id dan sekarang pake slug penganti id 
        return view(
            'detail',
            [
                "title" => "single post",
                "content" => $post,
            ]
        );
    }

    public function author(User $author)
    {

        $data = [
            "title"  => "Post Author",
            "blog"   => $author->posts->load('category', 'user'),
            "nama" => $author->name,
        ];
        // @dd($data);

        return view('postautor', $data);
    }
    public function allcategories()
    {
        $data = [
            "title" => "halo",
            "cat" => Category::all(),
        ];
        return view('allcategories', $data);
    }
}
