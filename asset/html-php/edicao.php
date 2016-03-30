<html>
<body>


<?php
	
	include 'conexao.php';	
	
	
	//Recupera o id do form
		$cpf_res_editar = isset($_POST['cpf_res_editar']) ? $_POST['cpf_res_editar'] : '';
		//Remove os espaços iniciais e finais da variável
		$cpf_res_editar = trim($cpf_res_editar);	
	
	$query = "UPDATE pcd SET nome_pcd = '". $nome ."', sobrenome_pcd ='".$sobrenome."' , sexo_pcd ='".$sexo."' , data_nascimento_pcd =  '".$data_nascimento."', cidade_pcd =  '".$cidade."' , bairro_pcd = '".$bairro."' , endereco_pcd = '".$endereco."' , complemento_pcd = '".$complemento."', cep_pcd = '".$cep."', cpf_res = '".$cpf."' WHERE cpf_res = ".$cpf_res_editar;

	$resultado = mysqli_query($db, $query);
	
	if($resultado){ 
		echo "PCD atualizado com sucesso!<br>"; 
	}else{ 
		echo "Erro ao atualizar PCD!<br>";
	} 
	
	

	$query = "UPDATE responsavel SET nome_res ='".$nome_res."', sobrenome_res ='".$sobrenome_res."', cpf_res= '".$cpf."', telefone_res ='".$telefone."', telefone2_res = '".$telefone2."', email_res = '".$email."' WHERE cpf_res = ".$cpf_res_editar;

	$resultado = mysqli_query($db, $query);
	
	if($resultado){ 
		echo "Responsavel atualizado com sucesso!"; 
	}else{ 
		echo "Erro ao atualizar responsavel!";
	} 
	
	
	
	mysqli_close($db);

	echo "<center><br><a href='./listagem.php'>Voltar</a></center>";

?>

 </body>
 </html>
