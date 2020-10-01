<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function new(Request $request, $slug)

    {
        $cabors = CabangOlahraga::all();
        $item = Post::where('slug', $slug)->firstOrFail();

        return view('pages.artikel', [
            'item' => $item,
            'cabors' => $cabors
        ]);

    }
}
