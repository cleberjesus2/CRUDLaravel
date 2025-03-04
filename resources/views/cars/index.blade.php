<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Carros</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cars as $car)
                    <tr class="text-center">
                        <td>{{ $car['id'] }}</td>
                        <td>{{ $car['nome'] }}</td>
                        <td>{{ $car['marca'] }}</td>
                        <td>{{ $car['modelo'] }}</td>
                        <td>
                            <a href="{{ route('carros.show', $car['id']) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('carros.edit', $car['id']) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('carros.destroy', $car['id']) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Excluir este carro?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Nenhum carro cadastrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="text-center">
            <a href="{{ route('carros.create') }}" class="btn btn-primary">Novo Carro</a>
        </div>
    </div>
</body>
</html>
 