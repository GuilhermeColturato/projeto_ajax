<?php
	$conexao = mysqli_connect("localhost", "root", "", "teste");
	if(!$conexao){
		echo "Falha na conexao com o banco de dados<br>";
	}
?>