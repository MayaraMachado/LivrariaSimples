<html>

<head>
	<title>
		Sistema de Controle Literário
	</title>
</head>

<body>
CADASTRO DE LIVROS
<hr/>
<form action='livros_inc_prog_1.php' method='post' >
Id Livro <input type='text' name='idlivros' size='100'/>
<br/><br/>
Nome <input type='text' name='nome' size='100'/>
<br/><br/>
autor <input type='text' name='autor' size='100' />
<br/><br/>
ISBN <input type='integer' name='isbn' size='100'/>
<br/><br/>
Categoria <input type='text' name='categoria' size='100' />
<br/><br/>
Preço de Compra <input type='float' name='precocompra' size='100' />
<br/><br/>
Estoque <input type='integer' name='estoque' size='100' />
<br/><br/>

<input type='submit' value='Salvar' />
</form>

</body>

</html>