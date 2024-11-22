<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'preco' => 'required|numeric'
        ]);

        // Criação do novo produto com os dados validados
        Produto::create($validated);

        return redirect()->route('index')->with('success', 'Produto criado com sucesso!');
    }
}
