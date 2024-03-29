<?php 
	if(empty($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] !== "on")
	{
		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
		exit();
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Nova Star</title>
	<meta charset="utf-8" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<!-- <meta name="theme-color" content="#809b69"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets-home/css/buttons-base.css?v=1.0" />
	<link rel="stylesheet" href="assets-home/css/main.css?v=1.0" />
	<link rel="stylesheet" href="assets-home/css/media-query.css?v=1.0" />
	<noscript>
		<link rel="stylesheet" href="assets-home/css/noscript.css?v=1.0 " /></noscript>

	</head>

<body class="is-preload landing">

	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">

			<nav id="nav">
				<ul class="menu-floating">
					<li><a href="index.html">Inicio</a></li>
					<li>
						<a href="#one">Sobre Nós</a>
					</li>
					<li><a href="#two">Parceirias</a></li>
					<li><a href="#three">Funcionalidades </a></li>
					<li><a href="acesso.phtml">Sistema</a></li>
				</ul>
			</nav>



		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="content">
				<!-- <header>
					<h2 align="center" class="home-header">Star Escola</h2>
					<p class="home-header">Nós Somos o Futuro do Sistema de Gestão Escolar</p>
				</header> -->
			</div>
			<a href="#one" class="goto-next scrolly">Next</a>
		</section>

		<!-- One -->

		<section id="one" class="spotlight style1 bottom">
			<span class="image fit main">
				<img class="img-full" src="images/banner-secundario/full.png" alt="" />
				<img class="img-860" src="images/banner-secundario/860.png" alt="" />
			</span>
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-12 col-12-medium">
							<header>
								<h2 class="home-header secondary">Seja bem vindo ao site da STAR ESCOLA</h2>

								<p class="dark"> O seu programa gestor de escolas on-line <br>Um sistema prático de
									gestão escolar, dealizado para ser amigável com o usuário <br>Mesmo com pouca
									habilidade com computadores a usabilidade se torna intuitiva</p>
								</p>
							</header>
						</div>
						<!-- <div class="col-12 col-12-medium">
									
								</div> -->
					</div>
				</div>
			</div>
			<a href="#two" class="goto-next scrolly">Next</a>
		</section>

		<!-- Two -->
		<section id="two" class="spotlight style2 right">
			<span class="image fit main">
				<img class="img-full" src="images/sistema/full.png" alt="Sistema Star Escola" />
				<img class="img-860" src="images/sistema/860.png" alt="Sistema Star Escola" />
			</span>
			<div class="content">
				<header>
					<h2 class="home-header" id="sobre-nos">Sobre nós</h2>
				</header>
				<p class="justify dark">
					A característica que destaca o sistema é a sua interface com botões, sem menus complexos dificultam
					o trabalho do usuário, uma vez que os botões levam diretamente a tela de uso.
				</p>
				<p class="justify dark">
					Professores, alunos, pais e responsáveis financeiros tem acesso ao sistema com permissão do
					administrador ( pela pagina do professor e aluno ) ao boletim, financeiro do aluno, mensagens e
					módulos permitidos.
				</p>

				<button class="button button--mimas"><span>Teste Gratuitamente</span></button>
			</div>
			<a href="#three" class="goto-next scrolly">Next</a>
		</section>

		<!-- Three -->
		<section id="three" class="spotlight style3 left">
			<span class="image fit main">
				<img class="img-full" src="images/parceiros/full.png" alt="parceiros Star Escola" />
				<img class="img-860" src="images/parceiros/860.png" alt="Sistema Star Escola" />
			</span>
			<div class="content">
				<header>
					<h2 class="home-header" id="pareceirias">Parceiros</h2>
				</header>
				<p class="justify dark">
					O Sistema de Gerenciamento Escolar StarEscola é sistema prático. Uma de nossas características que
					destacam o sistema é a sua interface com botões, sem menus e submenus que dificultam o trabalho do
					usuário.
				</p>
				<p class="justify dark">
					Ao lado é possivel verificar algumas das escolas que se beneficiam com o nosso sistema de gestão
					escolar.
				</p>
				<button class="button button--mimas"><span><span>Visitar Sistema</span></span></button>
			</div>
			<a href="#four" class="goto-next scrolly">Next</a>
		</section>

		<!-- Four -->
		<section id="four" class="wrapper style1 special fade-up">
			<div class="container">
				<header class="major">
					<h2 class="home-header" id="funcionalidades">Funções do Sistema</h2>
				</header>
				<div class="box alt">
					<div class="row gtr-uniform">
						<section class="col-4 col-6-medium col-12-xsmall">
							<div class="zoom">
								<a
									href="http://starescola.com.br/escola/admin/index.php?pg=usuarios&acao=lista&rev=1_1">
									<img src="images/administrativo-icon.png" class="img-responsive">
								</a>

								<h3>Administrativo</h3>
								<p class="dark"> Organização, direção e manutenção dos recursos da escola para, assim,
									produzir os melhores resultados no processo de ensino e aprendizagem.</p>
						</section>
						<section class="col-4 col-6-medium col-12-xsmall">
							<div class="zoom">
								<a
									href="http://starescola.com.br/escola/admin/index.php?pg=cadastro&acao=lista&rev=2_1&situacao_get=0">
									<img src="images/pedagogico-icon.png" class="img-responsive">
								</a>
							</div>
							<h3>Pedagógico</h3>
							<p class="dark">Responsável pela organização e pelo planejamento da proposta política e
								pedagógica de ensino da escola, assim como definição dos melhores.</p>
						</section>
						<section class="col-4 col-6-medium col-12-xsmall">
							<div class="zoom">
								<a
									href="http://starescola.com.br/escola/admin/index.php?pg=contas_receber&acao=lista&rev=3_2">
									<img src="images/financeiro-icon.png" class="img-responsive">
								</a>
							</div>
							<h3>Financeiro</h3>
							<p class="dark">sistematização dos procedimentos administrativos relacionados ao financeiro
								da organização. Com o objetivo de assegurar a eficiência.</p>
						</section>
						<section class="col-4 col-6-medium col-12-xsmall">
							<div class="zoom">
								<a
									href="http://starescola.com.br/escola/admin/index.php?pg=relatorios_modelos&acao=lista&rev=4_5">
									<img src="images/relatorios-icon.png" class="img-responsive">
								</a>
							</div>
							<h3>Relatórios Dinâmicos</h3>
							<p class="dark"> É uma ferramenta que busca analisar se as ações que estão sendo tomadas
								pela gestão estão surtindo efeito e melhorando, de fato, o desempenho.</p>
						</section>
						<section class="col-4 col-6-medium col-12-xsmall">
							<div class="zoom">
								<a
									href="http://starescola.com.br/escola/admin/index.php?pg=mensagens&acao=lista&rev=5_1">
									<img src="images/mensagens-icon.png" class="img-responsive">
								</a>
							</div>
							<h3>Mensagens</h3>
							<p class="dark"> A gestão objetiva a aprendizagem efetiva do escolar, tornando-o capaz de os
								desafios da sociedade enfrentar.</p>
						</section>
						<section class="col-4 col-6-medium col-12-xsmall">
							<div class="zoom">
								<a
									href="http://starescola.com.br/escola/admin/index.php?pg=almoxarifados_fornecedores&acao=lista&rev=6_1">
									<img src="images/almoxarifado-icon.png" class="img-responsive">
								</a>
							</div>
							<h3>Almoxarifado</h3>
							<p class="dark">Fornece condições para que a escola fique sempre abastecida, de forma
								contínua, materiais necessários para a realização de suas tarefas.</p>
						</section>
					</div>
				</div>
				<footer class="major">
					<ul class="actions special">
						<a href="http://starescola.com.br/escola/admin/index.php">
							<button class="button button--mimas"><span>Testar Sistema</span></button>
						</a>
					</ul>
			</div>
			</footer>
	</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<ul class="icons">
			<li class="icon-facebook"><a href="#" class="icon facebook"><img class="img-footer"
						src="images/img-icon.png"></a></li>
			<li class="icon-wats"><a href="https://contate.me/Star-Escola" class="icon wats"><img class="img-footer"
						src="images/icon-wats.png"></li>
			<li class="icon-Instagram"><a href="https://instagram.com/starescola?igshid=YmMyMTA2M2Y="
					class="icon Instagram"><img class="img-footer" src="images/icon-insta.png"></a></li>

		</ul>
		<ul class="copyright">
			<li>&copy; Star-Escola.</li>
			<li class="bold">Design Por: Leonardo O. Alves</li>
		</ul>
	</footer>

	</div>

	<!-- Scripts -->
	<script src="assets-home/js/lgpb.js?v=1.0"></script>
	<script src="assets-home/js/jquery.min.js?v=1.0"></script>
	<script src="assets-home/js/jquery.scrolly.min.js?v=1.0"></script>
	<script src="assets-home/js/jquery.dropotron.min.js?v=1.0"></script>
	<script src="assets-home/js/jquery.scrollex.min.js?v=1.0"></script>
	<script src="assets-home/js/browser.min.js?v=1.0"></script>
	<script src="assets-home/js/breakpoints.min.js?v=1.0"></script>
	<script src="assets-home/js/util.js?v=1.0"></script>
	<script src="assets-home/js/main.js?v=1.0"></script>


</body>

</html>