<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Crear Producto</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('productos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nom" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="descri" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" id="descri" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                        Volver
                    </a>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Guardar
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>