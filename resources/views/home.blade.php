<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .options {
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .option {
            padding: 15px 25px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-size: 18px;
            transition: 0.3s;
        }
        .product { background: #28a745; }
        .user { background: #007bff; }
        .car { background: #dc3545; }
        .option:hover { opacity: 0.8; }
    </style>
</head>
<body>

<div class="container">
    <h1>Escolha uma opção</h1>
    <div class="options">
        <a href="{{ route('produtos.create') }}" class="option product">Criar Produto</a>
        <a href="{{ route('usuarios.create') }}" class="option user">Criar Usuário</a>
        <a href="{{ route('carros.create') }}" class="option car">Criar Carro</a>
    </div>
</div>

</body>
</html>
