<?php
	$servername = "localhost";
	$database = "ecommerce";
	$username = "root";
	$password = "Douglas123@";

	// crando a conexão
	$conn = mysqli_connect($servername, $username, $password, $database);
	// verficando a conexão
	if (!$conn) {
    	die("Erro na conexão: " . mysqli_connect_error());
	}
	mysqli_close($conn);
?>