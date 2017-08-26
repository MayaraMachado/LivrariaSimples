<?php
$conn= new mysqli("localhost", "root", "root", "livraria");

if ($conn->connect_error) {
	die ("Falha na conexão:" . $conn-> connect_error);
}
$sql= "SELECT id, idlivros, nome, autor, isbn, categoria, estoque, precocompra FROM livros ";

//die("sql: " .$sql);

$result= $conn -> query($sql);

if ($result-> num_rows>0){
	echo "<table border='1'>
   <tr>
  <th>ID </th>
  <th>IdLivros</th>
  <th>Nome</th>
  <th>Autor</th>
  <th>ISBN</th>
  <th>Categoria</th>
  <th>Estoque</th>
  <th>Preço de Compra</th>
  
  </tr>";
  echo "</table>";
	while ($reg = $result->fetch_assoc()) {
        
		echo $reg['id'] ;
		echo ' - ' . $reg['idlivros'] ;
		echo ' - ' ;
		echo "<a href='http://localhost:81/livraria/livros/update/livros_precovenda_alt_form_4.php'>";
		echo  $reg['nome' ] ;
		echo "</a>";
		echo ' - ' . $reg['autor'] ;
		echo ' - ' . $reg['isbn'] ;
		echo ' - ' . $reg['categoria'] ;
		echo ' - ' . $reg['estoque'] ;
		echo ' - ' . $reg['precocompra'] . '<br/>';
}
	$result->close();
}
$conn->close();
?>
	

