<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                <h1>Listado de productos</h1>
                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-right">Nuevo producto</a>
                </div>
                <div class="card-body">
                    @if(session('info'))
                        <div class="alert alert-success">
                        {{ session('info') }}
                        </div>
                    @endif
                    <table class="table table-hover table-sm">
                        <thead>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        </thead>    
                        <tbody>
                            @foreach ( $products as $product )
                            <tr>
                                <td> {{ $product->description }}</td>
                                <td> {{ $product->price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>