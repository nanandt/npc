<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
  public function index(Request $request)
  {
    $cabors = CabangOlahraga::with('pemains')->get();
    $items = Pemain::with('cabang_olahraga')->where('nama', $request->nama)->take(4)->get();
    // dd($items);
    return view('pages.pemain', [
        'items' => $items,
        'cabors' => $cabors
    ]);
  }
}
