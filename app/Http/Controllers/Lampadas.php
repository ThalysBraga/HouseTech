<?php

namespace App\Http\Controllers;

use App\Models\Lampada;
use Illuminate\Http\Request;

class Lampadas extends Controller
{
    public function index()
    {
        return view('lampada.index')
        ->with('lampadas', Lampada::all());
    }

    public function create()
    {
        return view('lampada.create');
    }

    public function store(Request $request)
    {
        $dadosPreparados = $this->dadosPreparados($request->all());
        Lampada::create($dadosPreparados);
        return redirect()->route('lampada.index');
    }

    public function updateStatus($id)
    {
        $lampada = Lampada::find($id);

        $lampada->update([
            'status' => $lampada->status ? false : true
        ]);
        
        return 'atualizado';
    }

    public function dadosPreparados($params)
    {
        return[
            'nome' => $params['nome'],
            'grupo' => $params['grupo'],
            'descricao' => $params['descricao'],
            'status' => false,
        ];
    }
}
