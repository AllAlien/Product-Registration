<?php
session_start();
include ("conexao.php");

$emailDoUsu = $_GET['email'];
$nomeDoProduto = $_POST['nameProduct'];
$categoriaDoProduto = $_POST['category'];
$precoDoProduto = $_POST['preco'];
$obsDoProduto = $_POST['menssage'];


$insert = mysqli_query($conn, "INSERT INTO product_control (email, nome, categoria, preco, observacoes) VALUES ('$emailDoUsu', '$nomeDoProduto', '$categoriaDoProduto', '$precoDoProduto', '$obsDoProduto')") or die ("Falha na inserção de produto");

header("location:usu_admin.php");

?>