<?php

$nome= $_POST['nome'];
$cpf= $_POST ['cpf'];
$senha= $_POST ['senha'];

$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "INSERT clientes(nome, cpf, senha)
 values ('$nome', '$cpf', '$senha')";
 
//die("sql: " .$sql);
if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}


$conn->close();
 
?>
<br/>
<form action='clientes_inc_form_1.php' method='post'>
<input type='submit' value='Voltar' />
</form>

