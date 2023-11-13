<?php

namespace App\Http\Controllers;

use App\Models\Iglesia;
use Illuminate\Http\Request;

/**
 * Class IglesiaController
 * @package App\Http\Controllers
 */
class IglesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iglesias = Iglesia::paginate();

        return view('iglesia.index', compact('iglesias'))
            ->with('i', (request()->input('page', 1) - 1) * $iglesias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iglesia = new Iglesia();
        return view('iglesia.create', compact('iglesia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Iglesia::$rules);

        $iglesia = Iglesia::create($request->all());

        return redirect()->route('iglesias.index')
            ->with('success', 'Iglesia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iglesia = Iglesia::find($id);

        return view('iglesia.show', compact('iglesia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iglesia = Iglesia::find($id);

        return view('iglesia.edit', compact('iglesia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Iglesia $iglesia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iglesia $iglesia)
    {
        request()->validate(Iglesia::$rules);

        $iglesia->update($request->all());

        return redirect()->route('iglesias.index')
            ->with('success', 'Iglesia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $iglesia = Iglesia::find($id)->delete();

        return redirect()->route('iglesias.index')
            ->with('success', 'Iglesia deleted successfully');
    }
}
