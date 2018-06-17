<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Hello</title>
    </head>
    <body>
    @foreach ($listaProdutos as $produto)
    	<b>Cod: {{ $produto->id }}</b>: {{ $produto->descricao}} 
		<a href="/editarProduto/{{$produto->id}}">Editar</a>
		<a href="/removerProduto/{{$produto->id}}">Remover</a>    	
    	
    	<br/>
    @endforeach
 
 		<a href="/adicionarProduto">Novo</a>
    </body>
</html>
