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
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('produto.criar')}}">Criar Produto</a>
        </div>
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        @foreach($produtos as $produto)

        <tr>
            <td>{{$produto->id}}</td>    
            <td>{{$produto->nome}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->descricao}}</td>
            <td><a href="{{route('produto.editar', ['produto' => $produto])}}">Editar</a></td>
            <td>
                <form method="post" action="{{route('produto.deletar', ['produto' => $produto])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Deletar">
                </form>
            </td>
        </tr>

        @endforeach
        </table>
    </div>
</body>
</html>