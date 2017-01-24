<?php

include ("conexao.php");

$idUpdate = $_GET['id'];
$nomeUpdate = $_POST['nome']; 
$categoriaUpdate= $_POST['categoria'];
$precoUpdate = $_POST['preco'];
$obsUpdate = $_POST['message'];


$updateProduct = "UPDATE product_control SET name='$nomeUpdate', categoria='$categoriaUpdate', preco='$precoUpdate', observacoes='$obsUpdate' WHERE id=$idUpdate";

$query = mysqli_query($conn, $updateProduct);

//header("location:usu_admin.php");
?>