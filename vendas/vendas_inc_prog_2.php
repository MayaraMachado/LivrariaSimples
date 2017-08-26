<?php
$nome= $_POST['nome'];

$isbn= $_POST['isbn'];
$categoria= $_POST['categoria'];
$idlivro= $_POST ['idlivro'];
$nome= $_POST ['nome'];
$isbn= $_POST ['isbn'];
$autor= $_POST ['autor'];
$funcionario= $_POST ['funcionario'];
$precovenda= $_POST ['precovenda'];

$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "INSERT vendas(idlivro, nome, autor, isbn, categoria, precovenda,funcionario)
 values ('$idlivro', '$nome', '$autor', '$isbn', '$categoria', '$precovenda', '$funcionario')";
 

if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}


$conn->close();
 
?>
