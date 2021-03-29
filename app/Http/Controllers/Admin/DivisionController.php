<?php

namespace App\Http\Controllers\Admin;

use App\Division;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisiones = Division::orderBy('created_at', 'ASC')->paginate(20);
        return view('admin.divisiones.index', compact('divisiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.divisiones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sigla' => 'required',
            'nombre' => 'required',
            'municipio' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'oficina' => 'required',
        ]);

        Division::create($data);
        Alert::success('Exito', 'Division Creada Correctamente');
        return redirect('divisiones');
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
        $division = Division::findorfail($id);
        // $roles = Role::all();
        return view('admin.divisiones.edit', compact('division'));
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
        $division = Division::findorfail($id);
        $data = $request->validate([
            'sigla' => 'required',
            'nombre' => 'required',
            'municipio' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'oficina' => 'required',
        ]);
        $division->update($data);
        Alert::success('Exito', 'Division Actualizada Correctamente');
        return redirect('divisiones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::findorfail($id);
        $division->delete();
        Alert::success('Exito', 'Division Eliminada Correctamente');
        return redirect('divisiones');
    }
}
