<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?php the_field('titulo_pagina') ?></title>
	<meta name="description" content="<?php the_field('description_pagina') ?>">
	<meta property="og:type" content="website"/>		
	<meta property="og:title" content="Carlos Freitas | Portfólio"/>	
	<meta property="og:description" content="Carlos Freitas, desenvolvedor front end. Experiência como UX/UI designer e social media."/>
	<meta property="og:url" content="http://freitas.space"/>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/og-image.jpg"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/ico.ico">

<?php wp_head(); ?><!-- Tag necessária para página ser reconhecida como Header-->
</head>