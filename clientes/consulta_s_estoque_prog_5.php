<?php
$procurar=$_GET['procurar'];


$conn= new mysqli("localhost", "root", "root", "livraria");


if ($conn-> connect_error) {
	die ("Falha na conex�o:" . $conn-> connect_error);
}

$sql= "SELECT * FROM `livros` WHERE nome= '$procurar'";
$result= $conn -> query($sql);

if ($result-> num_rows>0){
	echo "<table border='1'>
   <tr>
  <th>IdLivros</th>
  <th>Nome</th>
  <th>Autor</th>
  <th>ISBN</th>
  <th>Categoria</th>
  <th>Pre�o de Venda</th>
  
  </tr>";
  echo "</table>";
	while ($reg = $result->fetch_assoc()) {
		If ($reg['nome' ]){ echo $reg['idlivros'] . ' - '  ;
							echo $reg['nome'] . ' - '  ; 
							echo $reg['autor'] . ' - '; 
							echo $reg['isbn'] . ' - '  ;
							echo $reg['categoria'] . ' - '  ;
							echo $reg['precovenda']. '<br/>';} 
		else{ echo "N/D";}
			
}
	$result->close();
}


 
?>