<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rotulo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class RotuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rotulos = Rotulo::all();


        return view('admin.rotulos.index', compact('rotulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = auth()->user();
        $remitente = auth()->user()->person;
        return view('admin.rotulos.create', compact('remitente', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'referencia' => 'required',
            'destinatario' => 'required',
            'cargoD' => 'required',
            'municipio' => 'required'
        ]);
            // dd($data);
        $rotulo = new Rotulo();
        $rotulo->user_id = $request->user_id;
        $rotulo->referencia = $data['referencia'];
        $rotulo->destinatario = $data['destinatario'];
        $rotulo->cargo = $data['cargoD'];
        $rotulo->celular = $request->celular;
        $rotulo->municipio = $data['municipio'];
        $rotulo->save();
        Alert::success('Exito', 'Rotulo Creado Correctamente');
        return redirect('rotulos');
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
    public function edit($id)
    {
        $user = auth()->user();
        $remitente = auth()->user()->person;
        $rotulo = Rotulo::findOrFail($id);
        // dd($rotulo);
        return view('admin.rotulos.edit', compact('rotulo', 'remitente', 'user'));
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
        $data = $request->validate([
            'referencia' => 'required',
            'destinatario' => 'required',
            'cargoD' => 'required',
            'municipio' => 'required'
        ]);
        $rotulo = Rotulo::findOrFail($id);
        $rotulo->referencia = $data['referencia'];
        $rotulo->destinatario = $data['destinatario'];
        $rotulo->cargo = $data['cargoD'];
        $rotulo->celular = $request->celular;
        $rotulo->municipio = $data['municipio'];
        $rotulo->save();
        Alert::success('Exito', 'Rotulo Actualizado Correctamente');
        return redirect('rotulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rotulo = Rotulo::findOrFail($id);
        $rotulo->delete();
        Alert::success('Exito', 'Rotulo Eliminado Correctamente');
        return redirect('rotulos');
    }


    public function generarPDF($id){
        $rotulo = Rotulo::findOrFail($id);

        $view = \Illuminate\Support\Facades\View::make('admin.rotulos.pdf', compact('rotulo'));
        $html = $view->render();
        PDF::SetMargins(5, 5, 5);
        PDF::SetAutoPageBreak(TRUE, 2);
        PDF::SetTitle('Rotulo');
        PDF::AddPage('L', 'A4');
        PDF::writeHTML($html, true, false, true, false, '');
        PDF::Output('rotulo-'.$rotulo->id.'.pdf');
    }
}
