<?php

namespace App\Http\Controllers;

use App\Models\OtrosIngreso;
use Illuminate\Http\Request;

/**
 * Class OtrosIngresoController
 * @package App\Http\Controllers
 */
class OtrosIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otrosIngresos = OtrosIngreso::paginate();

        return view('otros-ingreso.index', compact('otrosIngresos'))
            ->with('i', (request()->input('page', 1) - 1) * $otrosIngresos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $otrosIngreso = new OtrosIngreso();
        return view('otros-ingreso.create', compact('otrosIngreso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OtrosIngreso::$rules);

        $otrosIngreso = OtrosIngreso::create($request->all());

        return redirect()->route('otros-ingresos.index')
            ->with('success', 'OtrosIngreso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $otrosIngreso = OtrosIngreso::find($id);

        return view('otros-ingreso.show', compact('otrosIngreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $otrosIngreso = OtrosIngreso::find($id);

        return view('otros-ingreso.edit', compact('otrosIngreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OtrosIngreso $otrosIngreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtrosIngreso $otrosIngreso)
    {
        request()->validate(OtrosIngreso::$rules);

        $otrosIngreso->update($request->all());

        return redirect()->route('otros-ingresos.index')
            ->with('success', 'OtrosIngreso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $otrosIngreso = OtrosIngreso::find($id)->delete();

        return redirect()->route('otros-ingresos.index')
            ->with('success', 'OtrosIngreso deleted successfully');
    }
}
