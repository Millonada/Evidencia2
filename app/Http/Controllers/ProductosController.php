<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class ProductosController extends Controller
{

    public function index()
    {
        $datos['productos']= Productos::paginate(35);
        return view('productos.index', $datos);
        //dd($productos);
       // return view('productos.index',compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $datosProductos = request()-> except('_token');

        if($request->hasFile('foto')){
            $datosProductos['foto']=$request->file('foto')->store('uploads','public');
        }

        Productos::insert($datosProductos);
        return redirect('productos')->with('mensaje', 'Producto agregado UwU');
    }

    public function show(Productos $productos)
    {
        //
    }

    public function edit($id)
    {
        $productos= Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    public function update(Request $request, $id)
    {

        $datosProductos = request()-> except(['_token','_method']);

        if($request->hasFile('foto')){
            $productos = Productos::findOrFail($id);
            Storage::delete('public/'.$productos->foto);
            $datosProductos['foto']=$request->file('foto')->store('uploads','public');
        }
        Productos::where('id','=',$id)->update($datosProductos);
        //Recuperar datos
        $productos = Productos::findOrFail($id);
        //Pasar la info para que se muestre
        return view('productos.edit', compact('productos'));
    }

    public function destroy($id)
    {
        $productos = Productos::findOrFail($id);
        if(Storage::delete('public/'.$productos->foto)){
            Productos::destroy($id);
        }
        
        return redirect('productos')->with('mensaje', 'Producto eliminado OwO');
    }
}
