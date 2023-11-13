<?php

namespace App\Http\Controllers;

use App\Models\Cheque;
use Illuminate\Http\Request;

/**
 * Class ChequeController
 * @package App\Http\Controllers
 */
class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cheques = Cheque::paginate();

        return view('cheque.index', compact('cheques'))
            ->with('i', (request()->input('page', 1) - 1) * $cheques->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cheque = new Cheque();
        return view('cheque.create', compact('cheque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cheque::$rules);

        $cheque = Cheque::create($request->all());

        return redirect()->route('cheques.index')
            ->with('success', 'Cheque created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cheque = Cheque::find($id);

        return view('cheque.show', compact('cheque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cheque = Cheque::find($id);

        return view('cheque.edit', compact('cheque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cheque $cheque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheque $cheque)
    {
        request()->validate(Cheque::$rules);

        $cheque->update($request->all());

        return redirect()->route('cheques.index')
            ->with('success', 'Cheque updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cheque = Cheque::find($id)->delete();

        return redirect()->route('cheques.index')
            ->with('success', 'Cheque deleted successfully');
    }
}
