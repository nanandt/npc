<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
      $cabors = CabangOlahraga::with('pemains', 'pelatihs')->get();
      return view('pages.about', [
          'cabors' => $cabors
      ]);
  }
}
