<?php

namespace App\Http\Controllers;

use App\Models\Persiana;
use Illuminate\Http\Request;

class Persianas extends Controller
{
    public function index()
    {
        return view('persiana.index')
        ->with('persianas', Persiana::all());
    }

    public function create()
    {
        return view('persiana.create');
    }

    public function store(Request $request)
    {
        $dadosPreparados = $this->dadosPreparados($request->all());
        Persiana::create($dadosPreparados);
        return redirect()->route('persiana.index');
    }

    public function updateStatus($id)
    {
        $persiana = Persiana::find($id);

        $persiana->update([
            'status' => $persiana->status ? false : true
        ]);
        
        return 'atualizado';
    }

    public function dadosPreparados($params)
    {
        return[
            'nome' => $params['nome'],
            'tipo' => $params['tipo'],
            'tamanho' => $params['tamanho'],
            'status' => false,
        ];
    }
}
