<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use App\Recurso;
use DB;
use Aws;


class ReproductorController extends Controller
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

    
    public function index($url_curso, $url)
    {   
        $curso = Curso::where('url', $url_curso)->firstOrFail();
        $clases = Clase::where('url', $url)->firstOrFail();
        $recursos = DB::table('recursos')
        ->where('url', $url)
        ->get();

        if($clases->tipo_de_item == "texto"){
            $clase_siguientes = Clase::where([
                ['id','>', $clases->id], 
                ['id_curso', $url_curso]
            ])
            ->orderBy('id', 'asc')
            ->limit(1)
            ->get();
    
    
            return view('clase_texto', compact('curso', 'clases','recursos', 'clase_siguientes'));    
        }else {
            $clase_siguientes = Clase::where([
                ['id','>', $clases->id], 
                ['id_curso', $url_curso]
            ])
            ->orderBy('id', 'asc')
            ->limit(1)
            ->get();
    
    
            return view('reproductor', compact('curso', 'clases','recursos', 'clase_siguientes'));    
        }
       


    }
}
