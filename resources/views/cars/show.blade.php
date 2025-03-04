<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2 class="text-center mb-4">Detalhes do Carro</h2>
        <div class="card p-3">
            <p><strong>ID:</strong> {{ $car['id'] }}</p>
            <p><strong>Nome:</strong> {{ $car['nome'] }}</p>
            <p><strong>Marca:</strong> {{ $car['marca'] }}</p>
            <p><strong>Modelo:</strong> {{ $car['modelo'] }}</p>
        </div>
        <div class="text-center mt-3">
            <a href="{{ route('carros.index') }}" class="btn btn-primary">Voltar</a>
            <a href="{{ route('carros.edit', $car['id']) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
</body>
</html>
