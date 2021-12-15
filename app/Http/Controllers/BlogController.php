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
                "blog" => Post::all()
                // "variable" => nama_model::methotd
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

    public function allcategories()
    {
        $data = [
            "title" => "halo",
            "cat" => Category::all(),
        ];
        // @var_dump($data);
        // die();
        return view('allcategories', $data);
    }
    public function author(User $id)
    {
        $data = [
            "title" => "Post Author",
            "author" => $id,
        ];
        return view('postautor', $data);
    }
}
