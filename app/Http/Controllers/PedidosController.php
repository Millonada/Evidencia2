<?php

namespace App\Http\Controllers;



use App\Models\Productos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Productos::all();
        //dd($productos);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedidos $pedidos)
    {
        //
    }
}
