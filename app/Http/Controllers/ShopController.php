<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all();

        return view('index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomer_product' => 'required|integer',
            'ime' => 'required|max:255',
        ]);

        $product = Shop::create($validatedData);

        return redirect('/shops')->with('success', 'Успешно е добавен новият продукт в магазина.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shop = Shop::findOrFail($id);

        return view('show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shop = Shop::findOrFail($id);

    return view('edit', ['shop' => $shop]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $validatedData = $request->validate([
            'ime' => 'required|max:255',
            'nomer_product' => 'required|integer',
        ]);

        $shop = Shop::findOrFail($id);
        $shop->update($validatedData);

        return redirect('/shops')->with('success', 'Успешно обновен продукт от номенклатурата.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();

        return redirect('/shops')->with('success', 'Успешно изтрит продукт от номенклатурата.');
    }
}
