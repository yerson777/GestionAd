<?php

namespace App\Http\Controllers;

use App\Models\BalanceIglesia;
use Illuminate\Http\Request;

/**
 * Class BalanceIglesiaController
 * @package App\Http\Controllers
 */
class BalanceIglesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balanceIglesias = BalanceIglesia::paginate();

        return view('balance-iglesia.index', compact('balanceIglesias'))
            ->with('i', (request()->input('page', 1) - 1) * $balanceIglesias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $balanceIglesia = new BalanceIglesia();
        return view('balance-iglesia.create', compact('balanceIglesia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(BalanceIglesia::$rules);

        $balanceIglesia = BalanceIglesia::create($request->all());

        return redirect()->route('balance-iglesias.index')
            ->with('success', 'BalanceIglesia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $balanceIglesia = BalanceIglesia::find($id);

        return view('balance-iglesia.show', compact('balanceIglesia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $balanceIglesia = BalanceIglesia::find($id);

        return view('balance-iglesia.edit', compact('balanceIglesia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  BalanceIglesia $balanceIglesia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BalanceIglesia $balanceIglesia)
    {
        request()->validate(BalanceIglesia::$rules);

        $balanceIglesia->update($request->all());

        return redirect()->route('balance-iglesias.index')
            ->with('success', 'BalanceIglesia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $balanceIglesia = BalanceIglesia::find($id)->delete();

        return redirect()->route('balance-iglesias.index')
            ->with('success', 'BalanceIglesia deleted successfully');
    }
}
