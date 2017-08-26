
<?php
$conn= new mysqli("localhost", "root", "root", "livraria");

if ($conn->connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}
$sql = "SELECT nome, SUM(quantidade) AS soma FROM vendas GROUP BY nome";
$query =  $conn-> query($sql);
If ($query -> num_rows>0){
	while($row = $query-> fetch_assoc()){
echo $row['soma'] . ' - ';
echo $row['nome'] . "<br>";
	}
	$query->close();
}
$conn->close()
?>
	