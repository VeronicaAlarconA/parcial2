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
        $sale->nombre_empleado = $request->namev;
        $sale->nombre_cliente = $request->namev;
        $sale->nombre_producto = $request->namep;
        $sale->precio = $request->price;
        $sale->fecha_compra = $request->date;
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
        $sale->nombre_empleado = $request->namev;
        $sale->nombre_cliente = $request->namev;
        $sale->nombre_producto = $request->namep;
        $sale->precio = $request->price;
        $sale->fecha_compra = $request->date;
        $sale->save();
        return redirect()->route('sales.index');

    }

    public function destroy($id)
    {

    }

}