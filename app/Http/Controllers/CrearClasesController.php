<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use DB;

class CrearClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($url)
    {
        return view('panel/cursos/clase/create', compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $url)
    {

        $clase = new Clase();
        $clase->nombre = $request->get('nombre_clase');
        $clase->descripcion = $request->get('descripcion');
        $clase->video = $request->get('video');
        $clase->url = str_replace(" ", "-", $request->get('nombre_clase'));
        $clase->id_curso = $url;
        $clase->minuto = $request->get('minutos');
        $clase->formato_video = $request->get('formato_video');
        $clase->tipo_de_item= "clase";

        $clase->save();

        return redirect('/panel/cursos/'. $url.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($url, $id)
    {
        $clase = Clase::where('id', $id)->firstOrFail();

        return view('panel/cursos/clase/edit', compact('clase', 'url'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $url, $id)
    {
        $clase = Clase::find($id);
        $clase->nombre = $request->get('nombre_clase');
        $clase->descripcion = $request->get('descripcion');
        $clase->video = $request->get('video');
        $clase->url = $request->get('url');
        $clase->id_curso = $url;
        $clase->minuto = $request->get('minutos');
        $clase->formato_video = $request->get('formato_video');
        $clase->tipo_de_item= "clase";

        $clase->save();
        
        return redirect('/panel/cursos/'. $url.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($url, $id)
    {
        $clase = Clase::find($id);
        $clase->delete();

        return redirect('/panel/cursos/'. $url.'/edit');

    }

    public function confirmDelete($url, $id){
        $clase = Clase::find($id);
        return view('/panel/cursos/clase/delate', compact('clase', 'url'));
       
    }
}
