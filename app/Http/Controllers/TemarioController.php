<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use DB;

class TemarioController extends Controller
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

    public function index($url)
    {
        $curso = Curso::where('url', $url)->firstOrFail();

        $clases = DB::table('clases')
        ->where('id_curso', $url)
        ->get();

        return view('temario', compact('curso', 'clases'));

    }

}
