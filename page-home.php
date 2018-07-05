<?php
// Template Name: Home
?> <!-- Necessário para reconhecer na tela de edição default do Wordpress -->

<?php get_header(); ?> <!-- Inclui o arquivo header -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- Sempre inserir no fim da página -->



<!-- Conteúdo -->
<body>
	<header class="menu">
		<a class="logo" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/logo.png"></a>
		<span class="mobile-btn"></span>
		<nav class="menu-nav mobile-menu">
			<ul>
				<li><a class="active" href="#">Home</a></li>
				<li><a href="/sobre">Sobre</a></li>
				<li><a href="/jobs">Jobs</a></li>
			</ul>
		</nav>
	</header>

	<div class="topo">
		<div class="text">
			<h2>Carlos Freitas</h2>
			<h1>Porfólio de projetos</h1>
			<a  class="btn" href="/sobre">Sobre</a>
		</div>
	</div>

	<div class="tree-coluns">
		<div class="colum-one">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/icoDesign.png">
				<h3>Design</h3>
				<h4>Logos</h4>
		</div>

		<div class="colum-two">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/icoCriacao.png">
				<h3>Criação</h3>
				<h4>Sites</h4>
		</div>

		<div class="colum-tree">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/icoMarketing.png">
				<h3>Marketing</h3>
				<h4>Campanhas</h4>
		</div>
	</div>

		<div class="two-coluns">
			<div class="left">				
				<div class="sub-left-one">
					<h4>Persistência e</h4>
					<h3>Resultados</h3>
					<a class="btn" href="/jobs">Trabalhos</a>

				</div>

				<div class="sub-left-two">
					<h4>Movido à</h4>
					<h3>Desafios</h3>
					<a class="btn" href="/sobre">Mais</a>
				</div>
			</div>

			<div class="right">
				<h4>Vamos trabalhar</h4>
				<h3>Juntos?</h3>
				<a class="btn" href="mailto:carlos.freitas@turtleagencia.com.br">Vamos!</a>
			</div>
		</div>


	<?php endwhile; else: endif; ?> <!-- Sempre inserir no fim da página -->

		<?php get_footer(); ?> <!-- Inclui o arquivo header -->