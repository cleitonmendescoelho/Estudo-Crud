<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Teste</h1>
<form action="{{route('cadastro')}}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome do Produto" required><br>
    <input type="text" name="categoria" placeholder="Categoria" required><br>
    <input type="number" name="preco" placeholder="Preço" required><br>
    <button>Cadastrar</button>
</form>
</body>
</html>