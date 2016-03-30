<html>
<body>


<?php

	include 'conexao.php';
		
		//Recupera o id do form
		$cpf_res_excluir = isset($_POST['cpf_res_excluir']) ? $_POST['cpf_res_excluir'] : '';
		//Remove os espaços iniciais e finais da variável
		$cpf_res_excluir = trim($cpf_res_excluir);	
	
	$query = "DELETE FROM pcd WHERE cpf_res = ".$cpf_res_excluir;
	
	
	if(mysqli_query($db,$query)){ 
			echo "<center>PCD deletado com sucesso!</center>";
			
		} else {
	 		echo "<center>Erro ao deletar PCD!</center>";
			//algo equivalente a system exit
		}
		
	
	
	//$query = "SELECT * FROM responsavel WHERE pcd.cpf_res = responsavel.cpf_res";
	//$resultado = mysqli_query($db, $query);

	//if ($resultado->num_rows == 0) {          COMO O RESPONSAVEL POR ENQUANTO SÓ É VINCULADO A UM PCD, NÃO É NECESSARIO E TAVA DANDO ERRO
	
	$query = "DELETE FROM responsavel WHERE responsavel.cpf_res = " . $cpf_res_excluir;
	
	//}	
	
	if(mysqli_query($db,$query)){ 
			echo "<center>Responsavel deletado com sucesso!</center>";
		} else {
	 		echo "<center>Erro ao deletar Responsavel!</center>";
		}	
		

	mysqli_close($db);

	echo "<center><br><a href='../../index.html'>Voltar</a></center>";
	
	
?>

 </body>
 </html>
