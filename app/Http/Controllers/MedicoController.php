<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeMedicoRequest;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();
        return view('pages.medicos.index', compact('medicos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $regras = [
            'nome' => 'required',
            'especialidade' => 'required|min:11|max:14',
            'crm' => 'required',
        ];

        $mensagens = [
            'nome.required' => 'O campo NOME é obrigatório',
            'especialidade.required' => 'O campo DOCUMENTO é obrigatório',
            'crm.required' => 'Precisa-s preencher o campo'
        ];

        $request->validate($regras, $mensagens);

        $data = $request->all();
        $cliente = new Medico;
        $cliente->nome           = $data['nome'];
        $cliente->especialidade  = $data['especialidade'];
        $cliente->crm            = $data['crm'];
        $cliente->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico, $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('medico.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
