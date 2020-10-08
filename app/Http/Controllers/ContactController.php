<?php

namespace App\Http\Controllers;

use App\Models\CabangOlahraga;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      $cabors = CabangOlahraga::with('pemains', 'pelatihs')->get();
      return view('pages.contact',[
         'cabors' => $cabors
      ]);
    }

    public function create(Request $request)
    {
      $data = $request->all();

      Message::create($data);

      return redirect()->route('contact');
    }
}
