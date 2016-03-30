<html>
<body>


<?php
	
	include 'conexao.php';
	
	//Apos tratar os dados, realiza a insercao no banco de dados.
	$query = "INSERT INTO pcd (nome_pcd, sobrenome_pcd, sexo_pcd, data_nascimento_pcd, cidade_pcd, bairro_pcd, endereco_pcd, complemento_pcd, cep_pcd, cpf_res) VALUES ('". $nome ."', '".$sobrenome."', '".$sexo."', '".$data_nascimento."', '".$cidade."', '".$bairro."', '".$endereco."', '".$complemento."', '".$cep."', '".$cpf."')";		
	$resultado = mysqli_query($db, $query);
	
	
	//Verifica se foi possivel inserir e apresenta quantos registros foram atualizados
	if ($resultado) {
		echo "<center>Os dados foram inseridos com sucesso na tabela PCD.</center>";
	} else { 
		echo "<center>Ocorreu um erro na inserção dos dados na tabela PCD.</center>";
	}
	
	
	
	//Apos tratar os dados, realiza a INSERÇÃO no banco de dados.
	//SÓ INSERE SE O CPF DO RESPONSÁVEL AINDA NÃO EXISTE NO BD >> "Cadastrar Responsável no sistema ou Responsável já cadastrado (informe o CPF)"
	$query = "INSERT INTO responsavel (nome_res, sobrenome_res, cpf_res, telefone_res, telefone2_res, email_res) VALUES ('".$nome_res."', '".$sobrenome_res."', '".$cpf."', '".$telefone."', '".$telefone2."', '".$email."' )";		
	$resultado = mysqli_query($db, $query);
	
	if ($resultado) {
		echo "<center>Os dados foram inseridos com sucesso na tabela Responsavel.</center><br>";
	} else { 
		echo "<center>Ocorreu um erro na inserção dos dados na tabela Responsavel.</center><br>";
	}

	mysqli_close($db);

echo "<center><br><a href='../../index.html'>Voltar</a></center>";
	

?>

 </body>
 </html>
