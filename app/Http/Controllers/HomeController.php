<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Post::get();
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
