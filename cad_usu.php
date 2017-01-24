<?php
include ("conexao.php");


$nomeDoUsu = $_POST['nome'];
$emailDoUsu = $_POST['email'];
$senhaDoUsu = $_POST['senha'];

$insert = mysqli_query($conn, "INSERT INTO usu_cad_produtos (nome, email, senha) VALUES ('$nomeDoUsu','$emailDoUsu', $senhaDoUsu)") or die ("erro na inserção de dados usu no banco");


header("location:index.php");

?>