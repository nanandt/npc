<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Post::where('slug', $slug)->get();

        return view('pages.artikel', [
            'item' => $item
        ]);

    }
}
