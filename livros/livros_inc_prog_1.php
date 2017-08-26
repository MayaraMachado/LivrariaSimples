<?php
$nome= $_POST['nome'];
$idlivros= $_POST['idlivros'];
$isbn= $_POST['isbn'];
$categoria= $_POST['categoria'];
$precocompra= $_POST ['precocompra'];
$estoque= $_POST ['estoque'];
$autor= $_POST ['autor'];


$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "INSERT livros(idlivros, nome, isbn, categoria, precocompra,estoque, autor)
 values ('$idlivros','$nome', '$isbn', '$categoria', '$precocompra', '$estoque', '$autor')";
 

if ($conn-> query($sql) === TRUE){
	echo 'Registro efetuado com sucesso';
}else {
	echo 'Erro ao incluir: ' .$conn->error;
}


$conn->close();
 
?>
