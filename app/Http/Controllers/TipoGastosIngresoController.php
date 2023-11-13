<?php

namespace App\Http\Controllers;

use App\Models\TipoGastosIngreso;
use Illuminate\Http\Request;

/**
 * Class TipoGastosIngresoController
 * @package App\Http\Controllers
 */
class TipoGastosIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoGastosIngresos = TipoGastosIngreso::paginate();

        return view('tipo-gastos-ingreso.index', compact('tipoGastosIngresos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoGastosIngresos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoGastosIngreso = new TipoGastosIngreso();
        return view('tipo-gastos-ingreso.create', compact('tipoGastosIngreso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoGastosIngreso::$rules);

        $tipoGastosIngreso = TipoGastosIngreso::create($request->all());

        return redirect()->route('tipo-gastos-ingresos.index')
            ->with('success', 'TipoGastosIngreso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoGastosIngreso = TipoGastosIngreso::find($id);

        return view('tipo-gastos-ingreso.show', compact('tipoGastosIngreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoGastosIngreso = TipoGastosIngreso::find($id);

        return view('tipo-gastos-ingreso.edit', compact('tipoGastosIngreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoGastosIngreso $tipoGastosIngreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoGastosIngreso $tipoGastosIngreso)
    {
        request()->validate(TipoGastosIngreso::$rules);

        $tipoGastosIngreso->update($request->all());

        return redirect()->route('tipo-gastos-ingresos.index')
            ->with('success', 'TipoGastosIngreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoGastosIngreso = TipoGastosIngreso::find($id)->delete();

        return redirect()->route('tipo-gastos-ingresos.index')
            ->with('success', 'TipoGastosIngreso deleted successfully');
    }
}
