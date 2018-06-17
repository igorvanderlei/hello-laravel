<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Hello</title>

    </head>
    <body>
    	<h1>Adicionar Produto</h1>
    	
    	<form action="cadastrarProduto" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			Descrição: <input type="text" name="descricao" ><br/>
    			Preço: <input type="text" name="preco" ><br/>
    			Quantidade: <input type="text" name="quantidade" ><br/>
    			<input  type="submit" value="cadastrar" />
    	</form>
 
    </body>
</html>
