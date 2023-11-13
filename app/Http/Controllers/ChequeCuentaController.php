<?php

namespace App\Http\Controllers;

use App\Models\ChequeCuenta;
use Illuminate\Http\Request;

/**
 * Class ChequeCuentaController
 * @package App\Http\Controllers
 */
class ChequeCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chequeCuentas = ChequeCuenta::paginate();

        return view('cheque-cuenta.index', compact('chequeCuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $chequeCuentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chequeCuenta = new ChequeCuenta();
        return view('cheque-cuenta.create', compact('chequeCuenta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ChequeCuenta::$rules);

        $chequeCuenta = ChequeCuenta::create($request->all());

        return redirect()->route('cheque-cuentas.index')
            ->with('success', 'ChequeCuenta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chequeCuenta = ChequeCuenta::find($id);

        return view('cheque-cuenta.show', compact('chequeCuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chequeCuenta = ChequeCuenta::find($id);

        return view('cheque-cuenta.edit', compact('chequeCuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ChequeCuenta $chequeCuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChequeCuenta $chequeCuenta)
    {
        request()->validate(ChequeCuenta::$rules);

        $chequeCuenta->update($request->all());

        return redirect()->route('cheque-cuentas.index')
            ->with('success', 'ChequeCuenta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chequeCuenta = ChequeCuenta::find($id)->delete();

        return redirect()->route('cheque-cuentas.index')
            ->with('success', 'ChequeCuenta deleted successfully');
    }
}
