<html>
<body>

<?php

//Tenta conectar com o banco de dados
		$db = mysqli_connect("localhost","root", "", "lauratcc");
		
		
	if(mysqli_connect_errno()) { 
		echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL.";
		exit();
		
	}else{
		echo "<center>Ok, conexao com o gerenciador MySQL foi estabelecida.</center><br>";
	}

	

//Recupera do Form consumidor.html e atribui a variaveis
	$nome= isset($_POST['firstname']) ? $_POST['firstname'] : '';
	$sobrenome = isset($_POST['lastname']) ? $_POST['lastname'] : '';
	$sexo = isset($_POST['sex']) ? $_POST['sex'] : '';
	$data_nascimento = isset($_POST['borndate']) ? $_POST['borndate'] : '';
	//$data_nascimento = date_format($data_nascimento, 'd/m/Y');
	$cidade = isset($_POST['city']) ? $_POST['city'] : '';
	$bairro = isset($_POST['neighborhood']) ? $_POST['neighborhood'] : '';
	$endereco = isset($_POST['address']) ? $_POST['address'] : '';
	$complemento = isset($_POST['complement']) ? $_POST['complement'] : '';
	$cep = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';
	$nome_res = isset($_POST['firstname_res']) ? $_POST['firstname_res'] : '';
	$sobrenome_res = isset($_POST['lastname_res']) ? $_POST['lastname_res'] : '';
	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
	$telefone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
	$telefone2 = isset($_POST['telephone2']) ? $_POST['telephone2'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';

	

	//remove os espacos iniciais e finais das variaveis
	$nome = trim($nome);
	$sobrenome = trim($sobrenome);
	$sexo = trim($sexo);
	$data_nascimento = trim($data_nascimento);
	$cidade = trim($cidade);
	$bairro = trim($bairro);
	$endereco = trim($endereco);
	$complemento = trim($complemento);
	$cep = trim($cep);
	$nome_res = trim($nome_res);
	$sobrenome_res = trim($sobrenome_res);
	$cpf = trim($cpf);
	$telefone = trim($telefone);
	$telefone2 = trim($telefone2);
	$email = trim($email);
	


	//Para seguranca: Escapa os caracteres especiais numa string para usar em um comando SQL, levando em conta o conjunto atual de caracteres
	//Exemplo: Exemplo's de consulta's --> Exemplo\'s de consulta\'s
	
	/*
	$nome = mysqli_real_escape_string($nome, $db);
	$sobrenome = mysqli_real_escape_string($sobrenome, $db);
	$sexo = mysqli_real_escape_string($sexo, $db);
	$data_nascimento = mysqli_real_escape_string($data_nascimento, $db);
	$cidade = mysqli_real_escape_string($cidade, $db);
	$bairro = mysqli_real_escape_string($bairro, $db);
	$endereco = mysqli_real_escape_string($endereco, $db);
	$complemento = mysqli_real_escape_string($complemento, $db);
	$cep = mysqli_real_escape_string($cep, $db);
	$nome_res = mysqli_real_escape_string($nome_res, $db);
	$sobrenome_res = mysqli_real_escape_string($sobrenome_res, $db);
	$cpf = mysqli_real_escape_string($cpf, $db);
	$telefone = mysqli_real_escape_string($telefone2, $db);
	$email = mysqli_real_escape_string($email, $db);
	*/
	
		

		?>