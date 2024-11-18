<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Cadastro</title>
</head>
<body>
    <form action="{{('produto.store')}}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="text" name="categoria" placeholder="Categoria" required>
        <input type="text" name="preço" placeholder="Preço" required>
        <input type="text" name="estoque" placeholder="Estoque" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>