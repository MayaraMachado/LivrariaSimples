<?php

$nome= $_POST['nome'];
$senha= $_POST['senha'];

$conn= new mysqli ("localhost", "root", "root", "livraria");

If ($conn -> connect_error) {
	 die ('Falha na conexão: ' . $conn -> connect_error);  
} 

$sql= "SELECT (usuario) FROM usuarios 
WHERE usuario= '$nome' AND senha= '$senha'";

$resultado= $conn -> query($sql);

If ($resultado -> num_rows> 0) {
	$reg= $resultado -> fetch_assoc();
	echo ' Usuário localizado com sucesso ' . $reg['usuario'];		
	echo '<br/>';
  	echo "<a href='http://localhost:81/livraria/menu/menu_vendedor_form_3.php'>";
		echo 'Menu' ;
		echo "</a>";
	
}  else {
	echo 'Usuário não localizado';
}

$conn -> close();
?>
