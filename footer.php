		<footer>
			<div class="footer-flex">
				<div class="icon-footer">
					<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/logo.png">
				</div>
				<div class="contatos-footer">
					<h3>Teste</h3>
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/whats.svg">51 - 999999999</h4>
					<h4><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/email.svg">email@email.com</h4>
				</div>
				<div class="social-footer">
					<h3>Redes sociais</h3>
					<a href="https://pt-br.facebook.com/people/Carlos-J%C3%BAnior/100000828558073" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/face.svg"></a>		

					<a href="https://github.com/freitasjrcarlos" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico/git.svg"></a>				
				</div>
			</div>

			<div class="copy">
				<p>© <?php echo date("Y"); ?> Seu site </p>
			</div>
		</footer>
	 <?php wp_footer(); ?> <!-- Tag necessária para página ser reconhecida como Footer-->
	</body>
</html>