<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('modules/empresas/config');
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
        parse_str($request->empresa, $empresa);
        parse_str($request->cartao, $cartao);
        $pontos = [];
        foreach ($cartao as $key => $value) {
            // Verifica se a chave contém "pontuacao", "tipo" ou "descricao"
            if (preg_match('/^pontuacao-(\d+)$/', $key, $matches)) {
                $index = $matches[1];
                $pontos[$index]['pontos'] = $value;
            } elseif (preg_match('/^tipo-(\d+)$/', $key, $matches)) {
                $index = $matches[1];
                $pontos[$index]['premiacao'] = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            } elseif (preg_match('/^descricao-pontuacao-(\d+)$/', $key, $matches)) {
                $index = $matches[1];
                $pontos[$index]['descricao'] = $value;
            }
        }
        // Encontra o usuário
        $user = User::where('_id', $empresa['_id'])->first();

        try {
            // Atualiza o documento
            $success = $user->update([
                'empresa' => [
                    'nome' => $empresa['nome'],
                    'classificacao' => $empresa['classificacao'],
                    'cartao' => $pontos
                ]
            ]);
        } catch (\Exception $e) {
            dd('Erro: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id);
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
