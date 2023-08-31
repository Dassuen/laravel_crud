<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criar Produto</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>
        @endif
    </div>






    <form method="post" action="{{route('produto.salvar')}}">
        @csrf
        @method('post')
        <div>
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome" />
        </div>
        <div>
            <label>Quantidade</label>
            <input type="text" name="quantidade" placeholder="Quantidade" />
        </div>
        <div>
            <label>Preço</label>
            <input type="text" name="preco" placeholder="Preço" />
        </div>
        <div>
            <label>Descrição</label>
            <input type="text" name="descricao" placeholder="Descrição" />
        </div>
        <div>
            
            <input type="submit" value="salvar"/>
        </div>
    </form>
</body>
</html>