<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    public function index()
    {

        $dados = Aluno::All();

        return view('aluno.list', ['dados' => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("aluno.form");
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $request ->validate([
            'nome'=>'required',
            'cpf'=>'required',
        ],
        [
            'nome.required'=> 'O :attribute é obrigatório',
            'cpf.required'=> 'O :attribute é obrigatório',
        ]);

        Aluno::create($request->all());

        return redirect ('aluno');

    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
