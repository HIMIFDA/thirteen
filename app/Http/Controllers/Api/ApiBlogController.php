<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;


class ApiBlogController extends Controller
{
    public function getPosts()
    {
        $blogs = Blog::get();
        $resp = [
            'posts' => $blogs
        ];
        return $resp;
    }

    public function getPost($id)
    {
        $blog = Blog::findOrFail($id);
        $resp = [
            'post' => $blog
        ];
        return $resp;
    }
}
