<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Sale;


class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('create_sales', compact('sales'));
    
    }

    public function create()
    {
        $sale = new Sale();
        $sale->nombre_empleado = $request->nombre_empleado;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return redirect()->route('sales.index');
    
    }

    public function store(Request $request)
    {
        
    }

    public function show()
    {
        
    }

    public function edit()
    {
        $sale = Sale::find($id);
        return view('edit_sale', compact('sale'));
    }

    public function update()
    {
        $sale = Sale::find($id);
        $sale->nombre_empleado = $request->nombre_empleado;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        
        return redirect()->route('sales.index');

    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return redirect()->route('sales.index');
    }

}