<?php
$conn= new mysqli("localhost", "root", "root", "livraria");

if ($conn->connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}
$sql = "SELECT nome, SUM(quantidade) AS soma FROM vendas GROUP BY nome ORDER BY soma DESC";
$query =  $conn-> query($sql);
If ($query -> num_rows>0){
	echo "<table border='1'>
   <tr>
  <th>Quantidade </th>
  <th>Nome</th>  
  </tr>";
  echo "</table>";
	while($row = $query-> fetch_assoc()){
echo $row['soma'] . ' - ';
echo $row['nome'] . "<br>";
	}
	$query->close();
}
$conn->close()
?>
	