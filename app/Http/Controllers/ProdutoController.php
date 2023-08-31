<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    //
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index', ['produtos' => $produtos]);
        
    }
    public function criar()
    {
        return view('produtos.criar');
    }
    public function salvar(Request $request)
    {
        // Validação da requisição (POST)
        $data = $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
            'preco' => 'required|decimal:0,2',
            'descricao' => 'nullable'
        ]);

        // Criação do produto pela model
        $novoProduto = Produtos::create($data);

        // Redirecionar caso sucesso 
        return redirect(route('produto.index'));
    }
    public function editar(Produtos $produto)
    {
        return view('produtos.editar', ['produto' => $produto]);
    }
    public function atualizar(Produtos $produto, Request $request)
    {
        // Validação da requisição
        $data = $request->validate([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
            'preco' => 'required|decimal:0,2',
            'descricao' => 'nullable'
        ]);
        
        // Atualizar o produto
        $produto->update($data);

        // Redirecionar caso sucesso 
        return redirect(route('produto.index'))->with('success', 'Produto Atualizado!');
    }
}
