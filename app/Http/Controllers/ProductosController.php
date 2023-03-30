<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$productos=Productos::all();

        $datos['productos']= Productos::paginate(5);
        return view('productos.index', $datos);
        //dd($productos);
       // return view('productos.index',compact('productos'));
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
        $datosProductos = request()-> except('_token');

        if($request->hasFile('foto')){
            $datosSuperheroe['foto']=$request->file('foto')->store('uploads','public');
        }

        Productos::insert($datosProductos);


        return response()-> json($datosProductos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Productos::destroy($id);
        return redirect('productos')->with('mensaje', 'Producto eliminado OwO');
    }
}
