<?php
$idlivros= $_POST['idlivros'];

$autor= $_POST ['autor'];



$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conex�o:" . $conn-> connect_error);
}

$sql= "UPDATE livros SET  autor = '$autor'  where idlivros= '$idlivros'";
 //die("sql: " .$sql);
if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}


$conn->close();
 
?>