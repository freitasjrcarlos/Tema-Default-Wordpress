<?php
// Template Name: Home
?> <!-- Necessário para reconhecer na tela de edição default do Wordpress -->

<?php get_header(); ?> <!-- Inclui o arquivo header -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  <!-- Início do while --> 



<!-- Conteúdo -->
<body>
	<header class="menu">
		<a class="logo" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/logo.png"></a>
		<span class="mobile-btn"></span>
		<nav class="menu-nav mobile-menu">
			<ul>
				<li><a class="active" href="#">Página</a></li>
				<li><a href="/sobre">Página</a></li>
				<li><a href="/jobs">Página</a></li>
			</ul>
		</nav>
	</header>

	<div class="topo">
		<div class="text">
			<h2>Teste</h2>
			<h1>Teste</h1>
			<a  class="btn" href="/sobre">Sobre</a>
		</div>
	</div>




	<?php endwhile; else: endif; ?> <!-- Fim do while -->

		<?php get_footer(); ?> <!-- Inclui o arquivo footer -->