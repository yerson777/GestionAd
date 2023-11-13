<?php

namespace App\Http\Controllers;

use App\Models\BalanceFinalDepartamento;
use Illuminate\Http\Request;

/**
 * Class BalanceFinalDepartamentoController
 * @package App\Http\Controllers
 */
class BalanceFinalDepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balanceFinalDepartamentos = BalanceFinalDepartamento::paginate();

        return view('balance-final-departamento.index', compact('balanceFinalDepartamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $balanceFinalDepartamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $balanceFinalDepartamento = new BalanceFinalDepartamento();
        return view('balance-final-departamento.create', compact('balanceFinalDepartamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(BalanceFinalDepartamento::$rules);

        $balanceFinalDepartamento = BalanceFinalDepartamento::create($request->all());

        return redirect()->route('balance-final-departamentos.index')
            ->with('success', 'BalanceFinalDepartamento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $balanceFinalDepartamento = BalanceFinalDepartamento::find($id);

        return view('balance-final-departamento.show', compact('balanceFinalDepartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $balanceFinalDepartamento = BalanceFinalDepartamento::find($id);

        return view('balance-final-departamento.edit', compact('balanceFinalDepartamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  BalanceFinalDepartamento $balanceFinalDepartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BalanceFinalDepartamento $balanceFinalDepartamento)
    {
        request()->validate(BalanceFinalDepartamento::$rules);

        $balanceFinalDepartamento->update($request->all());

        return redirect()->route('balance-final-departamentos.index')
            ->with('success', 'BalanceFinalDepartamento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $balanceFinalDepartamento = BalanceFinalDepartamento::find($id)->delete();

        return redirect()->route('balance-final-departamentos.index')
            ->with('success', 'BalanceFinalDepartamento deleted successfully');
    }
}
