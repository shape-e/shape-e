<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use File;


class CursosController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admi');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = DB::table('cursos')->get();


        return view('panel/cursos/curso', compact('cursos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/panel/cursos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $report = new Curso();
        //Crear URL del curso por medio del nombre ingresado por el usuario
        $report->url = str_replace(" ", "-", $request->get('nombre_cursos'));

        $report->nombre = $request->get('nombre_cursos');
        
        $report->descripcion = $request->get('descripcion');
        
        //Subida de imagen del curso
        if($request->hasFile('img')){
            $file = $request->file('img');
            
            $name = time().$request->file('img')->getClientOriginalName();  //Renombramiento del archivo
            
            $destination = base_path() . '/public/img/ico_principal';  //Direccion donde se guaradara el archivo
            
            $request->file('img')->move($destination, $name); //Mover archivo de localizacion
            
            
            $report->portada = $name; //Insertar URL a tabla
        }
        $report->acceso = $request->get('acceso');

        $report->save();
        
        return redirect('/panel/cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::where('url', $id)->firstOrFail();

        $clases = DB::table('clases')
        ->where('id_curso', $id)
        ->get();


        return view('/panel/cursos/edit', compact('curso', 'clases'));

      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $report = Curso::find($id);

        //Crear URL del curso por medio del nombre ingresado por el usuario
        $report->url = str_replace(" ", "-", $request->get('nombre_cursos'));

        $report->nombre = $request->get('nombre_cursos');
        
        $report->descripcion = $request->get('descripcion');
         
        //Subida de imagen del curso
        if($request->hasFile('img')){

            $image_path = base_path() . '/public/img/ico_principal/'.$report->portada;

            if(file_exists($image_path)){
                unlink($image_path);
            }else{
            }
            

            $file = $request->file('img');
            
            $name = time().$request->file('img')->getClientOriginalName();  //Renombramiento del archivo
            
            $destination = base_path() . '/public/img/ico_principal';  //Renombramiento del archivo
            
            $request->file('img')->move($destination, $name); //Mover archivo de localizacion
            
            
            $report->portada = $name; //Insertar URL a tabla
            
        }

        $report->acceso = $request->get('acceso');

        $report->save();

        return redirect('/panel/cursos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
