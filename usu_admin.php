<?php
include ("conexao.php");
session_start();




if (!isset($_GET['numGerado'])){
	echo "Ops! Você não está acessando esta página de maneira confiável!";
	exit;
}elseif(isset($_GET['numGerado'])){
	if (!isset($_SESSION['num_aleatorio_da_sessao'])){
		echo "Sorry! Sua autenticação falhou!";
		exit;
	}
	elseif(isset($_SESSION['num_aleatorio_da_sessao'])){
		if ($_SESSION['num_aleatorio_da_sessao'] != $_GET['numGerado']){
			echo "Sorry! Sua autenticação falhou!";
			exit;
		}
	}
}


$mailLogin = $_SESSION['email_usu_login'];

$search = "SELECT * FROM product_control WHERE email='$mailLogin'";

$query = mysqli_query($conn, $search);

$rows = mysqli_num_rows($query);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Product Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="css/estiloIndex.css">
<link rel="stylesheet" href="css/estilo-div-for.css">
</head>
<body>
<header>
	<div class="container">
		<h1 class="titulo">Product Registration</h1>
	</div>
</header>
	<nav class="navbar navbar-default">
		<a href="" class="navbar-brand">Seja bem vindo <?php echo "<b>".$_SESSION['name_usu_login']."<b>"?></a>
		<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav">
				<li><a href="usu_admin.php" id="home-page">HOME</a></li>
				<li>

				<!--CADASTRO DE PRODUTOS-->
				<a role="button" data-toggle="collapse" href="#areaCad" aria-expanded="true" aria-controls="areaCad" id="cad-product">CADASTRAR PRODUCT</a>
					<div class="collapse" id="areaCad">
						<div class="well">
						
			<!--form de cad de produtos-->
			<form action=<?php echo "insert_product.php?email=".$mailLogin; ?>
			 id="form-cad" method="post">
				<div class="form-group">
					<label for="nameProduct">
						Nome do produto
					</label>
						<input id="nome-product" required type="text" name="nameProduct" class="form-control">
				</div>
				<div class="form-group">
					<label for="categoryProduct">
						Categoria do produto
					</label>
					<select name="category" id="categoria" class="form-control">
						<option value="alimentacao">ALIMENTAÇÃO</option>
						<option value="vestuario">VESTUÁRIO</option>
						<option value="lazer">LAZER</option>
						<option value="acessorios">ACESSÓRIOS</option>
					</select>
				</div>
				<div class="form-group">
					<label for="preco">
						Preço do produto
					</label>
					
					<input id="preco-product" required type="number" name="preco" class="form-control">
						
				</div>
				<div class="form-group">
					<label for="message">Observações sobre este produto</label>
					<textarea name="menssage" id="menssage" cols="30" rows="3" class="form-control"></textarea>
				</div>
				<button id="btn-cad" class="btn btn-primary">Cadastrar produto novo</button>
			</form>
					<!--FIM DO FORM DE CAD DE PRODUTOS-->
						</div>
					</div>
				</li>
				




				<li>
				<!--INICIO DO COLLAPSE DE BUSCA-->
				<a id="my-products" href="">MY PRODUTCS</a>

				</li>
				
				<li>
				<a href="#" data-toggle="collapse" data-target="#buscas" aria-expanded="false" aria-controls="buscas">SEARCH PRODUCT</a>
				<div class="collapse" id="buscas">
					<div class="well">
					<!--start form de procura-->
						<form action="search_product.php" method="post">
							<div class="form-group">
								<input type="text" placeholder="Buscar.." name="procura_product" class="form-control">
							</div>
							<button class="btn btn-info btn-block" type="submit">Buscar</button>
							
								
							
						</form>
					</div>
				</div>
				</li>
				<li >
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				SETTINGS
				<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">Mudar senha</a></li>
					<li class="divider"></li>
					<li><a href="#">Mudar e-mail</a></li>
					<li class="divider"></li>
					<li><a href="#">Mudar nome</a></li>
				</ul>
				</li>

			</ul>

		</div>
	</nav>
	<article>
		<!--CORPOR PRINCIPAL-->
		<div class="container">
			<div class="col-md-12 form-mod">
				<div class="search">
				<p class="p-table">Seus produtos</p>
				<!--TABELA DE VISUALIZAÇÕES-->
					<table class="table table-hover table-bordered">
						<th>Nome</th>
						<th>Categoria</th>
						<th>Preço</th>
						<th>Observações</th>
						<th>Ações</th>
					<?php 
						if ($rows > 0){  
						//inicio do while de consulta de produtos
						while ($dadosDoBancoProduct = $query->fetch_array()){
						?>
					<tr>
						<td><?php echo $dadosDoBancoProduct['nome'];?></td>
						<td><?php echo $dadosDoBancoProduct['categoria'];?></td>	
						<td><?php echo $dadosDoBancoProduct['preco'];?></td>	
						<td><?php echo $dadosDoBancoProduct['observacoes'];?></td>		
						<td>
							<!--MODAL PARA EDIÇÃO DE PRODUTO	-->
							<a href="" data-toggle="modal" data-target=".modal_edit"><span class="glyphicon glyphicon-pencil"></span>
							</a>

							<div class="modal fade modal_edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div role="content" class="modal-dialog modal-md">
									<div class="modal-content">
									<!--INICIO DO HEADER-->
										<div class="modal-header">
										<button class="close" data-dismiss="modal" data-target="close">
											<span aria-hidden="close">&times;</span>
										</button>
											<h4 class="modal-title">
												Edite as informações
											</h4>
											<div class="modal-body">
												<form action=<?php echo "update.php?id=".$dadosDoBancoProduct['id']; ?> method="post">
													<div class="form-group">
														<label for="nome">Nome</label>
														<input type="text" name="nome" class="form-control" value=<?php echo $dadosDoBancoProduct['nome'];  ?>>
													</div>
													<div class="form-group">
														<label for="categoria">
															Categoria do produto
														</label>
														<select name="categoria" id="categoria">
															<option value="a">A</option>
															<option value="b">B</option>
															<option value="c">C</option>
															<option value="d">D</option>
														</select>

													</div>
													<div class="form-group">
														<label for="preco">Preço do produto</label>
														<input class="form-control" type="number" name="preco" value=<?php echo $dadosDoBancoProduct['preco'];?>>
													</div>
													<div class="form-group">
														<label for="message">
															Observações do produto
														</label>
														<textarea class="form-control" name="message" id="message" cols="30" rows="5"></textarea>
													</div>
													<button type="submit" class="btn btn-success btn-block">Finalizar edições</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--FIM DA MODAL-->

							<a href=<?php echo "delete_product.php?id=".$dadosDoBancoProduct['id']; ?>>
							<span class="glyphicon glyphicon-remove">
								
							</span></a></td>
					</tr>
					<?php 

						}//fim do while
					}else{

					}

					?>	

					</table>
				</div>

			</div>
		</div>
	
	</article> 

<footer>
	<div class="container">
		<h6><a href="#">Política de privacidade</a></h6>
	</div>
</footer>






<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</body>
</html>

