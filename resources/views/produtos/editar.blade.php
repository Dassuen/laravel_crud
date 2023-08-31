<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>
        @endif
    </div>






    <form method="post" action="{{route('produto.atualizar', ['produto' => $produto])}}">
        @csrf
        @method('put')
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome" value="{{$produto->nome}}" />
        </div>
        <div>
            <label>Quantidade</label>
            <input type="text" name="quantidade" placeholder="Quantidade" value="{{$produto->quantidade}}" />
        </div>
        <div>
            <label>Preço</label>
            <input type="text" name="preco" placeholder="Preço" value="{{$produto->preco}}"/>
        </div>
        <div>
            <label>Descrição</label>
            <input type="text" name="descricao" placeholder="Descrição" value="{{$produto->descricao}}"/>
        </div>
        <div>
            
            <input type="submit" value="Atualizar"/>
        </div>
    </form>
</body>
</html>