<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {   $cabors = CabangOlahraga::with('pemains', 'pelatihs')->get();
        $items = Post::latest()->paginate(7);
        return view('pages.berita',[
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
