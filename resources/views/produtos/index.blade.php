<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <div>
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Descrição</th>

        </tr>
        @foreach($produtos as $produto)

        <tr>
            <td>{{$produto->id}}</td>    
            <td>{{$produto->nome}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->descricao}}</td>
        </tr>

        @endforeach
        </table>
    </div>
</body>
</html>