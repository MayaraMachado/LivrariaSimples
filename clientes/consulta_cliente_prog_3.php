<?php
$conn= new mysqli("localhost", "root", "root", "livraria");

if ($conn->connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}
$sql= "SELECT * FROM clientes ";

//die("sql: " .$sql);

$result= $conn -> query($sql);

if ($result-> num_rows>0){
	echo "<table border='1'>
   <tr>
  <th>Nome</th>
  <th>CPF</th>
  <th>Senha</th>
  <th>Status</th>
 
  </tr>";

echo "</table>";
	while ($reg = $result->fetch_assoc()) {
		echo $reg['nome' ] ;
		echo ' - ' . $reg['cpf'] ;
		echo ' - ' . $reg['senha'] ;
		echo ' / ' .  $reg['status'] . '<br/>';
}
	$result->close();
}
$conn->close();
?>
	