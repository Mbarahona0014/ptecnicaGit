<?php

namespace App\Http\Controllers;

use App\Models\MxgMateriasxgrado;
use App\Models\GrdGrado;
use App\Models\MatMaterium;
use Illuminate\Http\Request;

/**
 * Class MxgMateriasxgradoController
 * @package App\Http\Controllers
 */
class MxgMateriasxgradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mxgMateriasxgrados = MxgMateriasxgrado::paginate();

        return view('mxg-materiasxgrado.index', compact('mxgMateriasxgrados'))
            ->with('i', (request()->input('page', 1) - 1) * $mxgMateriasxgrados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectGrados = GrdGrado::paginate();
        $selectMaterias = MatMaterium::paginate();
        $mxgMateriasxgrado = new MxgMateriasxgrado();
        return view('mxg-materiasxgrado.create', compact('mxgMateriasxgrado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MxgMateriasxgrado::$rules);

        $mxgMateriasxgrado = MxgMateriasxgrado::create($request->all());

        return redirect()->route('mxg-materiasxgrados.index')
            ->with('success', 'MxgMateriasxgrado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mxgMateriasxgrado = MxgMateriasxgrado::find($id);

        return view('mxg-materiasxgrado.show', compact('mxgMateriasxgrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mxgMateriasxgrado = MxgMateriasxgrado::find($id);

        return view('mxg-materiasxgrado.edit', compact('mxgMateriasxgrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MxgMateriasxgrado $mxgMateriasxgrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MxgMateriasxgrado $mxgMateriasxgrado)
    {
        request()->validate(MxgMateriasxgrado::$rules);

        $mxgMateriasxgrado->update($request->all());

        return redirect()->route('mxg-materiasxgrados.index')
            ->with('success', 'MxgMateriasxgrado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mxgMateriasxgrado = MxgMateriasxgrado::find($id)->delete();

        return redirect()->route('mxg-materiasxgrados.index')
            ->with('success', 'MxgMateriasxgrado deleted successfully');
    }
}
