<?php

namespace App\Http\Controllers;

use App\Models\TipoIngreso;
use Illuminate\Http\Request;

/**
 * Class TipoIngresoController
 * @package App\Http\Controllers
 */
class TipoIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoIngresos = TipoIngreso::paginate();

        return view('tipo-ingreso.index', compact('tipoIngresos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoIngresos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoIngreso = new TipoIngreso();
        return view('tipo-ingreso.create', compact('tipoIngreso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoIngreso::$rules);

        $tipoIngreso = TipoIngreso::create($request->all());

        return redirect()->route('tipo-ingresos.index')
            ->with('success', 'TipoIngreso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoIngreso = TipoIngreso::find($id);

        return view('tipo-ingreso.show', compact('tipoIngreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoIngreso = TipoIngreso::find($id);

        return view('tipo-ingreso.edit', compact('tipoIngreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoIngreso $tipoIngreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIngreso $tipoIngreso)
    {
        request()->validate(TipoIngreso::$rules);

        $tipoIngreso->update($request->all());

        return redirect()->route('tipo-ingresos.index')
            ->with('success', 'TipoIngreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoIngreso = TipoIngreso::find($id)->delete();

        return redirect()->route('tipo-ingresos.index')
            ->with('success', 'TipoIngreso deleted successfully');
    }
}
