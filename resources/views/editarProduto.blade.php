<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Hello</title>

    </head>
    <body>
    	<h1>Editar Produto</h1>
    	
    	<form action="/salvarProduto" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			<input type="hidden" name="id" value="{{ $produto->id}}" />
    			Descrição: <input type="text" name="descricao" value="{{$produto->descricao}}"><br/>
    			Preço: <input type="text" name="preco" value="{{$produto->preco}}"><br/>
    			Quantidade: <input type="text" name="quantidade" value="{{$produto->quantidade}}"><br/>
    			<input  type="submit" value="alterar" />
    	</form>
 
    </body>
</html>
