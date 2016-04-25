<?php 

include ('asset/html-php/conexao.php');



        
        //Query SQL
        //$query = "SELECT usuario, senha FROM usuario";

        // Executa a query (o recordset $rs contém o resultado da query)
        //$rs = mysqli_query($db, $query);
        //$arrayTeste = array ();
        // Loop pelo recordset $rs
        // Cada linha vai para um array ($row) usando mysql_fetch_array
        
        /*while($row = mysqli_fetch_array($rs)) {
            $arrayTeste[]=$row;
        }*/
        /*echo "<pre>";
        print_r($arrayTeste);
        echo "</pre>";*/

        //Recupera os dados do form
        $cpf = isset($_POST['login_cpf']) ? $_POST['login_cpf'] : '';
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

       // $codificada = md5($senha);

        //Transforma as linhas usuários e senhas num array
        //$usuarios = array_column($arrayTeste, 'usuario');
        /*$senhas = array_column($arrayTeste, 'senha');
        echo "Usuários<pre>";
        print_r($usuarios);
        echo "</pre>";
        echo "Senhas<pre>";
        print_r($senhas);
        echo "</pre>";*/

        //Compara os dados do banco com os passados no login
        /*if(in_array($usuario, $usuarios) && in_array($codificada, $senhas) ){
                header("Location: ../../index.html");
            }
        }else{
            echo "Usuário/senha não encontrado";
        }*/


		
        session_start();
        $query = "SELECT u.cpf, u.senha, u.nome, p.descricao FROM usuario u INNER JOIN usuario_papel u_p ON  u.id = u_p.id_usuario INNER JOIN papel p ON u_p.id_papel = p.id WHERE u.cpf='".$cpf."' AND u.senha='".$senha."'";
		//  $query = "SELECT cpf, senha FROM usuario WHERE cpf='".$cpf."' AND senha='".$senha."'";

	   $rs = mysqli_query($db, $query);
	   
        //print_r($rs);
        if($rs->num_rows!=0){

            $resultado = mysqli_fetch_assoc($rs);
            // Se a sessão não existir, inicia uma
            //if (!isset($_SESSION)) session_start();
            //echo "Array resultado ";
            //print_r($resultado);
            
            // Salva os dados encontrados na sessão
            $_SESSION['cpf'] = $resultado['cpf'];
            $_SESSION['senha'] = $resultado['senha'];
			$_SESSION['nome'] = $resultado['nome'];
            $_SESSION['descricao'] = $resultado['descricao'];
  
            print_r($_SESSION);
            // Redireciona o visitante
            header('location:home.php');
			exit;
            //header("Location: ../../index.html");
        
        }else{
           echo "Usuário/senha não encontrado. <a href='index.php'>Voltar </a>";
        }

        
        // Encerra a conexão
        mysqli_close($db);

		?>