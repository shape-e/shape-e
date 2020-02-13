<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use DB;

class CrearModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($url)
    {

        return view('panel/cursos/modulo/create', compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $url)
    {
        $report = new Clase();

        $report->titulo = $request->get('nombre_modulo');
        $report->tipo_de_item = "modulo";
        $report->id_curso = $url;
        $report->save();

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
    public function edit($url, $id )
    {
        $modulo = Clase::where('id', $id)->firstOrFail();

        return view('panel/cursos/modulo/edit', compact('modulo', 'url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $url,$id)
    {
        $report = Clase::find($id);

        $report->titulo = $request->get('nombre_modulo');
        $report->save();

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
        $modulo = Clase::find($id);
        $modulo->delete();

        return redirect('/panel/cursos/'. $url.'/edit');

    }

    public function confirmDelete($url, $id){
        $modulo = Clase::find($id);
        return view('/panel/cursos/modulo/delate', compact('modulo', 'url'));
       
    }
}
