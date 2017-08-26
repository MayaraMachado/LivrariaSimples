<?php

$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}

$sql= "SELECT * FROM `solicitacoes` ";
$result= $conn -> query($sql);

if ($result-> num_rows>0){
	echo "<table border='1'>
   <tr>
  <th>Id</th>
  <th>IdLivros</th>
  <th>Nome</th>
  <th>Autor</th>
  <th>Quantidade</th>
  <th>Status</th>
  </tr>";

echo "</table>";
	while ($reg = $result->fetch_assoc()) {
		echo "<tr>";
	    echo "<td>" . $reg['id' ] . "</td>" . '  - ';
		echo "<td>" . $reg['idlivros' ] . "</td>" . '   - ';
		echo "<td>" . $reg['nomelivro' ] . "</td>" . '  - ';
		echo "<td>" . $reg['autor' ] . "</td>" . '  - ';
		echo "<td>" . $reg['quantidade' ] . "</td>" .  '  - ';
		echo "<td>" . $reg['status'] . "</td>" . '<br/>'; 
  echo "</tr>";		
}
   echo "</table>";
	$result->close();
} 
?>