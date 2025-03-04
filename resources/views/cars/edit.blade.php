<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2 class="text-center mb-4">Editar Carro</h2>
        <form action="{{ route('carros.update', $car['id']) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $car['nome'] }}" required>
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control" value="{{ $car['marca'] }}" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $car['modelo'] }}" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form> 
    </div> 
</body>
</html>
