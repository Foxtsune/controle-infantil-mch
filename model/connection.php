<?php 
	
	function dbConnetion(){
		//Configurar banco de dados
		$server = "localhost";

		//Nome de usuário que tem acesso
		$user ="root";

		//Senha do usuário, que tem acesso ao banco de dados
		$pass ="";

		//Banco de dados que deseja estabelecer a conexão
		$database ="educacao_infantil_mch";

		try {
	    	$connection = new PDO('mysql:host=' . $server . ';dbname=' . $database, $user, $pass);
	    	$connection->exec("set names utf8");
	    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Config o php para lançar erros e excessões

	    /*foreach($connection->query('SELECT * from users') as $row) {
	        var_dump($row);
	    }*/

	    return $connection;
		} catch (PDOException $e) {
		    print "Error!: " . utf8_encode($e->getMessage()) . "<br/>";
		    die();
		}
	}


?>