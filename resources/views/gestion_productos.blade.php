<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestión de Productos</h1>

        <div class="mb-3 text-end">
            <a href="{{ route('productos.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Crear producto
            </a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>${{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('productos.edit', $product->id) }}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>

                                        <form action="{{ route('productos.destroy', $product->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($products->isEmpty())
                        <div class="alert alert-info text-center mt-3">
                            No hay productos registrados.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</body>
</html>