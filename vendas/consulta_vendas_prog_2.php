<?php
$conn= new mysqli("localhost", "root", "root", "livraria");

if ($conn->connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}
$sql= "SELECT * FROM vendas ";

//die("sql: " .$sql);

$result= $conn -> query($sql);

if ($result-> num_rows>0){
		echo "<table border='1'>
   <tr>
   <th> Nome </th>
  <th> Autor</th>
  <th> ISBN </th>
  <th> Categoria </th>
  <th> Quantidade </th>
  <th> Funcionário </th>
  <th> preço de Venda </th>
  </tr>";

echo "</table>";
	while ($reg = $result->fetch_assoc()) {
        echo "<a href='http://localhost:81/viagem/livros/livros_inc_prog_1.php'>";
		echo $reg['idlivro' ] ;
		echo "</a>";
		echo ' - ' . $reg['nome'] ;
		echo ' - ' . $reg['autor'] ;
		echo ' - ' . $reg['isbn'] ;
		echo ' - ' . $reg['categoria'] ;
		echo ' - ' . $reg['Quantidade'] ;
		echo ' - ' . $reg['funcionario'] ;
		echo ' - ' . $reg['precovenda'] . '<br/>';
}
	$result->close();
}
$conn->close();
?>
	
