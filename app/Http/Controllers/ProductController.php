<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = session('products', []);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = session('products', []);

        $newProduct = [
            'id'          => count($products) + 1,
            'nome'        => $request->input('nome'),
            'descricao'   => $request->input('descricao'),
            'preco'       => $request->input('preco'),
        ];

        $products[] = $newProduct;
        session(['products' => $products]);

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = session('products', []);
        $product = collect($products)->firstWhere('id', (int)$id);

        if (!$product) {
            return redirect()->route('produtos.index')->with('error', 'Produto não encontrado!');
        }

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = session('products', []);
        $product = collect($products)->firstWhere('id', (int)$id);

        if (!$product) {
            return redirect()->route('produtos.index')->with('error', 'Produto não encontrado!');
        }

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $products = session('products', []);

        foreach ($products as $key => $product) {
            if ($product['id'] == $id) {
                $products[$key]['nome']      = $request->input('nome');
                $products[$key]['descricao'] = $request->input('descricao');
                $products[$key]['preco']     = $request->input('preco');
                break;
            }
        }

        session(['products' => $products]);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = session('products', []);

        foreach ($products as $key => $product) {
            if ($product['id'] == $id) {
                unset($products[$key]);
                break;
            }
        }

    
        $products = array_values($products);
        session(['products' => $products]);

        return redirect()->route('produtos.index')->with('success', 'Produto removido com sucesso!');
    }
}
