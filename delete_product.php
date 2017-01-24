<?php

include ("conexao.php");


$idDelete = $_GET['id'];

$delete = "DELETE FROM 	product_control WHERE id=$idDelete" or die ("Erro ao tentar deletar um produto");


$query = mysqli_query($conn, $delete);

header("location:usu_admin.php");
?>