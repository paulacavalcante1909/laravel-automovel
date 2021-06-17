<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsAutomovel;

class AutomovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModelsAutomovel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return ModelsAutomovel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ModelsAutomovel::findOrFail($id);
    }

    /**
     * Find resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $automoveis = ModelsAutomovel::query();
        if ($request->has('q')) {
            $param = $request->q;
            $automoveis = $automoveis
                ->where('veiculo', 'like', '%' . $param . '%')
                ->orWhere('ano', $param)
                ->orWhere('marca', 'like', '%' . $param . '%')
                ->orWhere('descricao', 'like', '%' . $param . '%');
        }
        return $automoveis->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $automovel = ModelsAutomovel::findOrFail($id);
        $automovel->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $automovel = ModelsAutomovel::findOrFail($id);
        $automovel->delete();
    }
}
