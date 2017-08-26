<?php

$nome= $_POST['nome'];
$senha= $_POST['senha'];

$conn= new mysqli ("localhost", "root", "root", "livraria");

If ($conn -> connect_error) {
	 die ('Falha na conexão: ' . $conn -> connect_error);  
} 

$sql= "SELECT (nome) FROM clientes 
WHERE nome= '$nome' AND senha= '$senha'";

$resultado= $conn -> query($sql);

If ($resultado -> num_rows> 0) {
	$reg= $resultado -> fetch_assoc();
	echo ' Usuário localizado com sucesso ' . $reg['nome'];	
	echo '<br/>' ;
	echo "<a href='http://localhost:81/livraria/menu/menu_cliente_form_5.php'>";
	echo 'Menu ' . '<br/>';
	echo "</a>";
  	
	
}  else {
	echo 'Usuário não localizado';
}

$conn -> close();
?>
