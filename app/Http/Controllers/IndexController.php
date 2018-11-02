<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class IndexController extends Controller
{
    public function home()
    {
        $blogs = Blog::paginate(10);
        return view('home', compact('blogs'));
    }
}
