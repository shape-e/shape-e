<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class InternoController extends Controller
{
    public function __construct()
    {
        $this->middleware('practicante');
    }
    public function index()
    {
        $cursos = DB::table('cursos')->where('acceso', 'interno')->get();

        return view('interno', compact('cursos'));
    }
}
