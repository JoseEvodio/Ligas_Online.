<?php

namespace App\Http\Controllers;

use App\Ligas;
use Illuminate\Http\Request;

class LigasController extends Controller
{

    public function tags() {
        return $this->hasMany('ligas.index')->orderBy('Puntaje');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['ligas']=Ligas::paginate(7);

        return view('ligas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ligas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Nombre_del_Equipo' => 'required|string|max:100',
            'Victorias' => 'required|string|max:100',
            'Empates' => 'required|string|max:100',
            'Derrotas' => 'required|string|max:100',
            'Puntaje' => 'required|string|max:100',
            'Jugadores_Amonestados' => 'required|string|max:100',
            'Jugadores_Expulsados' => 'required|string|max:100',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        //$datosLiga=request()->all();

        $datosLiga=request()->except('_token');

        Ligas::insert($datosLiga);

        //return response()->json($datosLiga);
        return redirect('ligas')->with('Mensaje','Equipo agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ligas  $ligas
     * @return \Illuminate\Http\Response
     */
    public function show(Ligas $ligas)
    {
        //$ligas = Ligas::find($id);

        return view('ligas.calendario', compact('ligas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ligas  $ligas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       /* $ligas = Ligas::findOrFail($id);

        return view('ligas.edit', compact($ligas)); */

        $ligas = Ligas::find($id);

        return view('ligas.edit', compact('ligas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ligas  $ligas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //

        $campos=[
            'Nombre_del_Equipo' => 'required|string|max:100',
            'Victorias' => 'required|string|max:100',
            'Empates' => 'required|string|max:100',
            'Derrotas' => 'required|string|max:100',
            'Puntaje' => 'required|string|max:100',
            'Jugadores_Amonestados' => 'required|string|max:100',
            'Jugadores_Expulsados' => 'required|string|max:100',
        ];

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);

        $datosLiga=request()->except(['_token','_method']);
        Ligas::where('id','=',$id)->update($datosLiga);

        //$ligas = Ligas::find($id);
        //return view('ligas.edit', compact('ligas'));

        return redirect('ligas')->with('Mensaje','Equipo Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ligas  $ligas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ligas::find($id)->delete();

        return redirect('ligas')->with('Mensaje','Equipo Eliminado');
    }
}
