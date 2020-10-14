<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use App\Models\Pelatih;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
  public function index(Request $request)
  {
      $cabors = CabangOlahraga::with('pelatihs')->get();
      $items = Pelatih::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->take(4)->get();
      return view('pages.pelatih', [
        'cabors' => $cabors,
        'items' => $items
    ]);
  }
}
