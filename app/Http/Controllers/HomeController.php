<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modeldata;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function submit(Request $request)
    {
        // Proses data yang dikirimkan melalui formulir
        // Misalnya, menyimpan data ke database
        
        return redirect('/')->with('success', 'Data berhasil dikirim!');
    }
}
