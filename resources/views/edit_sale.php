<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de ventas</title>
</head>
<body>
<div class="container mt-5 col-md-6 text-center">
        <h1>Editar</h1>
        <form action="{{route('sales.update') }}" method="PUT">
            @csrf
            <div class="form-group">
                <label for="namev">Nombre Vendedor</label>
                <input type="text" name="namev" id="namev" class="form-control">
            </div>
            <div class="form-group">
                <label for="namec">Nombre cliente</label>
                <input type="text" name="namec" id="namec" class="form-control">
            </div>
            <div class="form-group">
                <label for="namep">Nombre producto</label>
                <input type="text" name="namep" id="namep" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Fecha</label>
                <input type="text" name="date" id="date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Guardar</button>
        </form>
    </div>
    <div>
    
</body>
</html>