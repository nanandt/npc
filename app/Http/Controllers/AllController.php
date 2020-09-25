<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        $alls = Post::latest()->skip(5)->limit(5)->get();
        return view('pages.home', [
            'alls' => $alls
        ]);
    }
}
