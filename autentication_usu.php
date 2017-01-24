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
		
	header("location:usu_admin.php");
}else{
	echo "sorry, login não efetuado";
}

?>