<?php

session_start();

include ("conexao.php");

$emailLogin = $_POST['email-login'];
$senhaLogin = $_POST['senha-login'];

$autentication =  "SELECT * FROM usu_cad_produtos WHERE email='$emailLogin' AND senha='$senhaLogin'" or die ("erro no select");

$query = mysqli_query($conn, $autentication);

$rows = mysqli_num_rows($query);

if($rows > 0){
	//substituir o while posteriormente
	while ($dadosRequer = $query->fetch_array()){
		$dadosRequer['nome'];
		$_SESSION['name_usu_login']=$dadosRequer['nome'];
		$_SESSION['email_usu_login']=$dadosRequer['email']; 
		 
	}
	$numAleatorio = rand(2000, 8000);
	$_SESSION['num_aleatorio_da_sessao'] = $numAleatorio;	
	header("location:usu_admin.php?numGerado=$numAleatorio");
}else{
	echo "sorry, nehum usuário com esses parametros no sistema.";
}

?>