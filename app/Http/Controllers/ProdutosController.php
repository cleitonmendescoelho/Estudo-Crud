<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0'
        ]);
        
        // Cria o registro no banco de dados
        Produto::create($validatedData);

        // Retorna uma mensagem de sucesso ou redireciona
        return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
    }
}
