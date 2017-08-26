
<?php

$nome= $_POST['nomefuncionario'];
$novafuncao= $_POST ['novafuncao'];
$status= $_POST ['status'];

$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "UPDATE funcionarios SET funcao = '$novafuncao' where nomefuncionario = '$nome'";
 
//die("sql: " .$sql);
if ($conn-> query($sql) === TRUE){
	echo 'Registro alterado com sucesso';
}else {
	echo 'Erro ao alterar: ' .$conn->error;
}


$conn->close();
 
?>
<br/>
<form action='clientes_inc_form_1.php' method='post'>
<input type='submit' value='Voltar' />
</form>