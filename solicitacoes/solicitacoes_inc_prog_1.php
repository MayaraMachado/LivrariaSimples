<?php
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$idlivros= $_POST ['idlivro'];
$quantidade= $_POST ['quantidade'];
$autor= $_POST ['autor'];

$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "INSERT solicitacoes(idlivros, nomelivro, autor, cpf, quantidade)
 values ('$idlivros', '$nome', '$autor', '$cpf', '$quantidade')";
 

if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}


$conn->close();
 
?>



