<?php
include ("conexao.php");

$emailDeRecuperacao = $_POST['email'];

$cons = "SELECT *FROM usu_cad_produtos WHERE email='$emailDeRecuperacao'";

$query = mysqli_query($conn, $cons);


$rows = mysqli_num_rows($query);

if ($rows > 0){
		echo "Recuperação de e-mail em andamento. Para concluir essa ação acesse o e-mail informado, clique no link e siga as intruções para recuperar sua senha.<br><br><a href='index.php'>Retornar</a>.";
	
	}else{

		echo "E-mail não cadastrado. Certifique-se de que informou o e-mail correto<br><br>. <a href='index.php'>Retornar.</a>";
		exit;
	}

?>

