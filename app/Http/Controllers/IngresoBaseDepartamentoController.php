<?php

namespace App\Http\Controllers;

use App\Models\IngresoBaseDepartamento;
use Illuminate\Http\Request;

/**
 * Class IngresoBaseDepartamentoController
 * @package App\Http\Controllers
 */
class IngresoBaseDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresoBaseDepartamentos = IngresoBaseDepartamento::paginate();

        return view('ingreso-base-departamento.index', compact('ingresoBaseDepartamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresoBaseDepartamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresoBaseDepartamento = new IngresoBaseDepartamento();
        return view('ingreso-base-departamento.create', compact('ingresoBaseDepartamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(IngresoBaseDepartamento::$rules);

        $ingresoBaseDepartamento = IngresoBaseDepartamento::create($request->all());

        return redirect()->route('ingreso-base-departamentos.index')
            ->with('success', 'IngresoBaseDepartamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresoBaseDepartamento = IngresoBaseDepartamento::find($id);

        return view('ingreso-base-departamento.show', compact('ingresoBaseDepartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresoBaseDepartamento = IngresoBaseDepartamento::find($id);

        return view('ingreso-base-departamento.edit', compact('ingresoBaseDepartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  IngresoBaseDepartamento $ingresoBaseDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngresoBaseDepartamento $ingresoBaseDepartamento)
    {
        request()->validate(IngresoBaseDepartamento::$rules);

        $ingresoBaseDepartamento->update($request->all());

        return redirect()->route('ingreso-base-departamentos.index')
            ->with('success', 'IngresoBaseDepartamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingresoBaseDepartamento = IngresoBaseDepartamento::find($id)->delete();

        return redirect()->route('ingreso-base-departamentos.index')
            ->with('success', 'IngresoBaseDepartamento deleted successfully');
    }
}
