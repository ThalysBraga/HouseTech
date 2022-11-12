<?php

namespace App\Http\Controllers;

use App\Models\Varal;
use Illuminate\Http\Request;

class Varais extends Controller
{
    public function index()
    {
        return view('varal.index')
        ->with('varais', Varal::all());
    }

    public function create()
    {
        return view('varal.create');
    }

    public function store(Request $request)
    {
        $dadosPreparados = $this->dadosPreparados($request->all());
        Varal::create($dadosPreparados);
        return redirect()->route('varal.index');
    }

    public function updateStatus($id)
    {
        $varal = varal::find($id);

        $varal->update([
            'status' => $varal->status ? false : true
        ]);
        
        return 'atualizado';
    }

    public function dadosPreparados($params)
    {
        return[
            'nome' => $params['nome'],
            'grupo' => $params['grupo'],
            'tamanho' => $params['tamanho'],
            'status' => false,
        ];
    }
}
