<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Product Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="css/estiloIndex.css">
<link rel="stylesheet" href="css/div-ocultas.css">
</head>
<body>
<header>
	<div class="container">
		<h1 class="titulo">Product Registration</h1>
	</div>
</header>
	<article>
		
		<div class="container">
			<div class="row">

				<div class="col-md-12 form-mod">
				<h1>Crie uma conta e comece a controlar seus produtos</h1>
				<h3>É fácil e rápido</h3>


				<!--INCIO DO FORM DE CADASTRO-->
					<form action="cad_usu.php" method="post">
						<div class="form-group">
							<label for="nome">
							Insira seu nome
							</label>
								<input required="" type="text" id="nome-cad-usu" autocomplete="off" name="nome" class="form-control ">
						</div>
						<!--INICIO DO ALERT DE ERRO-->
						<div id="error-nome-cad" class="alert alert-warning error-name">
							<button class="close" data-dismiss="alert">
								<span>&times;</span>
							</button>
							<b>ATENÇÃO!</b> Nome inserido é inválido
						</div>
						<div class="form-group">
							<label for="email">
								Informe seu endereço de email
							</label>
							<input id="mail" required="" type="email" autocomple="off" name="email" id="email" class="form-control">
						</div>
						<!--INICIO DO ALERT DE ERRO-->
						<div id="error-email-cad" class="alert alert-warning error-email">
							<button class="close" data-dismiss="alert">
								<span>&times;</span>
							</button>
							<b>ATENÇÃO!</b> e-mail informado é inválido.
						</div>
						<div class="form-group">
							<label for="senha">
								Escolha uma senha
							</label>
							<input id="pass" required="" type="password" name="senha" autocomple="off"class="form-control">
						</div>
						<!--INICIO DO ALERT DE ERRO-->
						<div id="error-senha-cad"class="alert alert-warning error-pass">
							<button class="close" data-dismiss="alert">
								<span>&times;</span>
							</button>
							<b>ATENÇÃO!</b> escolha outra senha.
						</div>
						<input type="submit" id="submit-cad-usu" class="btn btn-primary btn-block" value="Realizar cadastro">
						</form>
						<!--FIM DO FROM DE CADASTRO-->

						<div class="commit">

								<!--Inicio da segunda modal FORM LOGIN-->
							<a href="#" data-toggle="modal" data-target=".seg_modal">Já possuo uma conta</a>
							<div class="modal fade seg_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
							<!--tamanho da modal-->
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<button class="close" data-dismiss="modal" aria-label="close">
											<span aria-hidden="true">&times;</span>
										</button>
										<!--Inicio cabeçalho-->
										<h4>Informe seu e-mail e senha para login</h4>
									</div>
									<div class="modal-body">
									<!--FORM AUTENTICATION-->
										<form action="autentication_usu.php" method="post">
											<div class="form-group">
												<label for="email-login">
													Informe seu e-mail</label>
													<input required type="email" name="email-login" class="form-control">
											</div>

											<!--INICIO DO ALERT DE ERRO-->
											<div id="error-email-login" class="alert alert-warning">
												<button class="close" data-dismiss="alert" >
													<span aria-heidden="true">&times;</span>
												</button>
												<b>ATENÇÃO!</b> e-mail não cadastrado.
											</div>
											<!--FIm DO ALERT DE ERRO-->
											<div class="form-group">
												<label for="senha-login">
												Informe sua senha</label>
													<input  required type="password" name="senha-login" class="form-control">
											</div>
											<!--INICIO DO ALERT DE ERRO-->
											<div id="error-senha-login" class="alert alert-warning">
												<button class="close" data-dismiss="alert">
													<span aria-hidden="true">&times;</span>

												</button>
												<b>ATENÇÃO!</b> senha incorreta.
											</div>
											<input type="submit" class="btn btn-primary btn-block" value="Fazer login">
										</form>

					
									</div>
								</div>

							</div>
							</div>
							<!--inicio da modal FORM DE LOGIN RECUPERAÇÃO-->
							<a href="" class="pass"
							  data-toggle="modal" data-target=".pass_modific">Já possuo uma conta mas esqueci a senha.</a>
							<div class="modal fade pass_modific" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<!--Conteudo da modal-->
										<div class="modal-header">
										<button class="close" data-dismiss="modal" aria-label="close">
										<!--button close x-->
											<span aria-hidden="true">&times;</span>
										</button>
											<h3>Informe-nos o e-mail cadastrado.</h3>
											
										</div>
											<div class="modal-body">
												
										<form action="pass-perdida.php" method="post">
											<div class="form-group">
												<input required type="email" class="form-control" placeholder="Seu e-mail...">
											</div>

											<!--INICIO DO ALERT DE ERRO-->
											<div id="error-email-recupecarao" class="alert alert-warning">
												<button class="close" data-dismiss="alert" aria-label="close">
													<span aria-hidden="true">&times;</span>
												</button>
												<b>ATENÇÃO!</b> este e-mail não está cadastrado.
											</div>
											<input type="submit" class="btn btn-primary btn-block" value="Recuperar senha">
												
											
										</form>
											</div>
										<!--dim do formulário de recuperção-->
									</div>
								</div>
							</div>
							<!--FIm da modal-->
						</div>
					</form>
				</div>
			</div>
		</div>
	
	</article> 

<footer>
	<div class="container">
		<h6><a href="#">Política de privacidade</a></h6>
	</div>
</footer>





<script src="js/valida.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</body>
</html>