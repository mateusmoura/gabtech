<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>NossoGabinete</title>
		
		<!-- meta -->
		<link rel="apple-touch-icon" sizes="57x57" href="img/ico/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/ico/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/ico/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/ico/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/ico/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/ico/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="img/ico/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/ico/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/ico/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/ico/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="img/ico/manifest.json">
		<link rel="mask-icon" href="img/ico/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name='viewport' content='width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0'>
		<meta name="description" content="">
		<meta name="author" content="https://br.linkedin.com/in/mateusmouraprofile" />
		<link rel="shortcut icon" href="img/ico/favicon.ico" type="image/x-icon" />

		<!-- PARA QUE A MEDIA QUERIES FUNCIONE NO IE8 -->
		<!--[if lt IE 9]>
		<script src="js/plugins/css3-mediaqueries.js"></script>
		<![endif]-->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/base.css" media="screen" />

		<!--[if IE]><link rel="stylesheet" href="css/ie.css" media="screen" /><![endif]-->

		<!--[if lt IE 9]>
		<script src="js/plugins/html5.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9;">
		<![endif]-->
	</head>
<!--[if !IE]>  -->
	<body>
<!-- <![endif]-->
<!--[if IE 8]>
	<body class="ie8">
<![endif]-->
<!--[if IE 9]>
	<body class="ie9">
<![endif]-->
<!--[if IE 10]>
	<body class="ie10">
<![endif]-->
		<div id="global">
			<main role="main" class="page__login">
				<div class="row">
					<div class="col-12">
						<div class="align-center">
							<h1 class="header__logo--form-active">
								<a href="#this">
									<i class="icon icon-clip-active"></i>
									<img src="img/lgo/header__logo.svg" alt="NossoGabinete">
								</a>
							</h1>
						</div>

						<div class="modal__default">
							<div class="modal__head">
								<div class="row">
									<div class="col-12">
										<h2>Entre com sua conta</h2>
									</div>
								</div>
							</div>

							<div class="modal__content">
								<div class="modal__content--form">
									<form action="#url" class="validate" method="POST" data-ajax="true" data-callfn="fnCallBack">
										<div class="row form--normal">
											<div class="col-12">
												<label>Email</label>
												<input type="text" class="form-style required email" name="email" placeholder="">
											</div>
										</div>

										<div class="row form--normal">
											<div class="col-12">
												<label>Senha</label>
												<input type="password" class="form-style required" name="senha" placeholder="">
											</div>
										</div>

										<div class="row">
											<div class="col-12">
												<button type="submit" class="btn btn-full btn-success btn-enter"><i class="icon icon-lock"></i> Entrar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="align-center">
							<a href="#this" class="btn btn-link btn-white">Esqueceu sua senha?</a>
						</div>
					</div>
				</div>
			</main>
		</div>

		<div id="loading"></div>

		<script>
			var base_url = '';
		</script>

		<script src="js/plugins/module.js"></script>
		<script src="js/plugins/jQuery-1.11.0.min.js"></script>
		
		<script src="js/Modulos/MM.Mensagem.js"></script>
		<script src="js/Modulos/MM.VerificarNavegador.js"></script>
		<script src="js/Modulos/MM.ValidarFormularios.js"></script>
		<script src="js/Modulos/MM.Feedback.js"></script>
		<script src="js/Modulos/MM.Tooltip.js"></script>

		<!--[if lte IE 9]><script src="js/plugins/jQuery.placeholder.js"></script>
		<script>
			$(document).ready(function(){
				$('input[placeholder], textarea[placeholder]').placeholder();
			});
		</script><![endif]-->

		<script src="js/base.js"></script>
		<!-- <script src="js/util.js"></script> -->
	</body>
</html>