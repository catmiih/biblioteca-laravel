<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <form action="/editar-produto/{{ $produto-> id}}" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}" id="">
        <br><br>

        <label for="lblValor">Valor:</label>
        <input type="text" name="valor" value="{{ $produto->valor }}" id="">
        <br><br>

        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="{{ $produto->estoque }}" id="">
        <br><br>

        <button>Cadastrar</button>
    </form>
</body>
</html>