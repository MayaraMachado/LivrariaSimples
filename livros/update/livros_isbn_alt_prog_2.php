<?php
$idlivros= $_POST['idlivros'];
$isbn= $_POST['isbn'];


$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "UPDATE livros SET  isbn ='$isbn' where idlivros= '$idlivros'";
 //die("sql: " .$sql);
if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}


$conn->close();
 
?>