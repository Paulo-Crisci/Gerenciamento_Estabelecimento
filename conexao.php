<?php
	/* Credenciais de banco de dados. Supondo que você esteja executando o MySQL
	servidor com configuração padrão (usuário 'root' sem senha)*/
	$conn = mysqli_connect('localhost', 'root', '', 'gerenciabrindes');
	//$conn = mysqli_connect('localhost', 'u783335722_kato', '29122009paulo', 'u783335722_kato');
	 
	/* Tenta se conectar ao banco de dados MySQL */
	mysqli_set_charset($conn, 'utf8');
	 
	// Checa conexão
	if($conn->connect_error){
		die("ERRO: Falha ao fazer a conexão " .$conn->connection_error);
	}
?>

