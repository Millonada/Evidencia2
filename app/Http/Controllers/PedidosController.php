<?php

namespace App\Http\Controllers;



use App\Models\Pedidos;
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
        $pedidos=Pedidos::with('producto')->get();
       // dd($pedidos);
        return view('pedidos.index',compact('productos','pedidos'));
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
        $producto=Productos::find($request->producto_id);
        

        try {
            Pedidos::create([
                "idProducto"=>$request->producto_id,
                "cantidad"=>$request->cantidad,
                "precio"=>$producto->precio,
                "estatus"=>$request->estatus_pedido,
                "total"=>$request->cantidad * $producto->precio,
            ]);
            return  redirect()->back()->with(['success'=>'Se registro con exito']);
        } catch (\Throwable $th) {

            dd($th->getMessage());
            return redirect()->back()->with(['error'=>'Algo no salio bien']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($pedidos)
    {
        $productos=Productos::all();
        $pedido=Pedidos::find($pedidos);
        return view('pedidos.show',compact('productos','pedido'));
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
    public function update(Request $request,$pedidos)
    {
        //$productos=Productos::all();
        $pedido=Pedidos::find($pedidos);
        $producto=Productos::find($pedido->idProducto);
      //dd($request);

        // aqui se recupera el registro a editar y se recupera el producto que esta 
        // ligado a ese pedido, todo esto te lo puedes ahorrar usando relaciones ;)
        try {
            if($request->estatus_pedido == "entregado"){
               // dd('entrago');
               //dd($pedido->cantidad,$producto->cantidadAlmacen);
                if($pedido->cantidad < $producto->cantidadAlmacen){
                    // validamos que tengamos suficiente stock
                    $producto->cantidadAlmacen-=$request->cantidad;
                    $producto->save();
                    //dd($producto);
                }else{
                    dd('No tienes suficiente stock para surtir este pedido');
                }
            }
            
            $pedido->update([

                //'idProducto'=>$request->producto_id,
                'cantidad'=>$request->cantidad,
                'estatus'=>$request->estatus_pedido
            ]);
            return redirect()->route('pedidos.index');
        } catch (\Throwable $th) {
            
            dd($th->getMessage());
            return redirect()->back()->with(['error'=>'Algo no salio bien']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pedido=Pedidos::destroy($id);
        return redirect()->route('pedidos.index');
    }
}
