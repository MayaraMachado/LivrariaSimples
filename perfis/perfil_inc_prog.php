<?php

$nome= $_GET['nome'];
$conn= new mysqli("localhost", "root", "root", "livraria");

if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}


$sql= "INSERT perfis (nome) values ('$nome')";

if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso.';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}

$conn->close();

?>


