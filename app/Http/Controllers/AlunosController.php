<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Alunos::all();
        return response()->json($alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'uuid' => 'required|uuid|unique:alunos',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos',
            'matricula' => 'required|string|max:255',
        ]);

        $aluno = Alunos::create($validatedData);

        return response()->json($aluno, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aluno = Alunos::findOrFail($id);
        return response()->json($aluno);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aluno = Alunos::findOrFail($id);

        $validatedData = $request->validate([
            'uuid' => 'required|uuid|unique:alunos,uuid,' . $id,
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email,' . $id,
            'matricula' => 'required|string|max:255',
        ]);

        $aluno->update($validatedData);

        return response()->json($aluno);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aluno = Alunos::findOrFail($id);
        $aluno->delete();

        return response()->json(null, 204);
    }
}
