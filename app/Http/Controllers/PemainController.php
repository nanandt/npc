<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
  public function index(Request $request)
  {
    $items = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->get();
    // dd($items);
    return view('pages.pemain', [
        'items' => $items
    ]);
  }
}
