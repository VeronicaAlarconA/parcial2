<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ventas</title>
</head>
<body>
<div class="container mt-5 col-md-6 text-center">
        <h1>Crear</h1>
        <form action="{{route('sales.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre_empleado">Nombre Vendedor</label>
                <input type="text" name="nombre_empleado" id="nombre_empleado" class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre_cliente">Nombre cliente</label>
                <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre_producto">Nombre producto</label>
                <input type="text" name="nombre_producto" id="nombre_producto" class="form-control">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control">
            </div>
            <div class="form-group">
                <label for="fecha_compra">Fecha</label>
                <input type="text" name="fecha_compra" id="fecha_compra" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Crear</button>
        </form>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre vendedor</th>
                    <th scope="col">Nombre cliente</th>
                    <th scope="col">Nombre producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha Compra</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{$sale->nombre_empleado}}</td>
                        <td>{{$sale->nombre_cliente}}</td>
                        <td>{{$sale->nombre_producto}}</td>
                        <td>{{$sale->precio}}</td>
                        <td>{{$sale->fecha_compra}}</td>
                        <td>
                            <a href="{{route('sales.edit', $sale->id)}}" class="btn btn-primary">Editar</a>
                            <form action="{{route('sales.destroy', $sales->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>