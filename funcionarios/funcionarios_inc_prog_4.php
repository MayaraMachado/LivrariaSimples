<?php

$nome= $_POST['nomefuncionario'];
$funcao= $_POST ['funcao'];
$status= $_POST ['status'];

$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "INSERT funcionarios(nomefuncionario, funcao, status)
 values ('$nome', '$funcao', '$status')";
 
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