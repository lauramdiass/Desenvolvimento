<html>

<head>

  <meta charset="utf-8">
  
  <title>Cadastro de PCD</title>

    
</head>

<body>


<?php

/* $result = mysqli_query($con,"SELECT * FROM Persons");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?> */
	
	include 'conexao.php';	
	
	//LISTA PCD
	
	$query = "SELECT * FROM pcd, responsavel WHERE pcd.cpf_res = responsavel.cpf_res";
	$resultado = mysqli_query($db, $query);

	if ($resultado->num_rows > 0) {
     // output data of each row
	 echo "<table border='1'>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Sexo</th>
			<th>Cidade</th>
			<th>Bairro</th>
			<th>Endereço</th>
			<th>Complemento</th>
			<th>CEP</th>
			<th>Data de Nascimento</th>			
			<th>Nome do Responsável</th>
			<th>Sobrenome do Responsável</th>
			<th>CPF</th>
			<th>Telefone Principal</th>
			<th>Telefone Reserva</th>
			<th>E-mail</th>
			
		</tr>";
     
	 while($row = $resultado->fetch_assoc()) {
        echo "<tr>";
		echo "<td>" . $row['id_pcd'] . "</td>";
		echo "<td>" . $row['nome_pcd'] . "</td>";
		echo "<td>" . $row['sobrenome_pcd'] . "</td>";
		echo "<td>" . $row['sexo_pcd'] . "</td>";
		echo "<td>" . $row['cidade_pcd'] . "</td>";
		echo "<td>" . $row['bairro_pcd'] . "</td>";
		echo "<td>" . $row['endereco_pcd'] . "</td>";
		echo "<td>" . $row['complemento_pcd'] . "</td>";
		echo "<td>" . $row['cep_pcd'] . "</td>";
		echo "<td>" . $row['data_nascimento_pcd'] . "</td>";
		echo "<td>" . $row['nome_res'] . "</td>";
		echo "<td>" . $row['sobrenome_res'] . "</td>";
		echo "<td>" . $row['cpf_res'] . "</td>";
		echo "<td>" . $row['telefone_res'] . "</td>";
		echo "<td>" . $row['telefone2_res'] . "</td>";
		echo "<td>" . $row['email_res'] . "</td>";	
		
		/*echo '<td><center>
			<form action="exclusao.php" method="post">
            <input type="hidden" name="id" value = "">
			<input type="submit" name="Deletar" value="Deletar" />
			</form>
			</center></td>';*/
		
		echo "</tr>";
	}
	
	echo "</table>";
	}
	else {
		echo "Nenhum resultado.";
	}
	
	
	mysqli_close($db);

	echo "<center><br><a href='../../index.html'>Voltar</a></center>";

?>

 </body>
 </html>
