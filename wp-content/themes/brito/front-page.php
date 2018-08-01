<?php get_header(); the_post();?>

<main class="home">
	<section class="banner fadeIn">	
		<div class="img-wp" style="background-image: url(<?php the_field('banner'); ?>);">
		
		</div>
		<?php 
			if(have_rows('conteudo_banner')):
				while(have_rows('conteudo_banner')):
					the_row();
		?>
				<span class="icone-chave">{</span>
				<div class="conteudo-wp texto-banner">
					<h1 class="titulo" data-texto="<?php the_sub_field('titulo'); ?>"></h1>
					<h2 class="subtitulo" data-texto="<?php the_sub_field('subtitulo'); ?>"></h1>
				</div>
				<span class="icone-chave2">}</span>
		<?php 
			endwhile;
		endif;
		?>
	</section>

	<section class="about-me" id="sobre-mim">
		<div class="container">
			<h1 class="titulo1"><?php the_field('titulo_sobre_mim'); ?></h1>
			<div class="conteudo-wp col-md-7">
				<?php the_field('conteudo'); ?>
			</div>

			<div class="imagem col-md-4">
				<div class="img-wp" style="background-image: url(<?php the_field('my_image'); ?>);"></div>
			</div>
		</div>
	</section>

	<section class="skills" id="habilidades">
		<div class="container">
			<h1 class="titulo1"><?php the_field('titulo_skills'); ?></h1>

			<div class="conteudo-wp col-md-5">
				<?php the_field('conteudo_skills'); ?>
			</div>

			<div class="grafico col-md-7">
				<?php 
					if(have_rows('grafico')):
						while(have_rows('grafico')):
							the_row();
				?>

				<div class="info">

					<div class="bloco-skills">
						<img class="icone" src="<?php the_sub_field('icone'); ?>);" alt="<?php the_sub_field('tag_alt'); ?>"></>
						<p class="texto"><?php the_sub_field('texto'); ?></p>
					</div>
					<div class="numero"><span class="counter"><?php the_sub_field('bloco'); ?></span><span class="porcentagem">%</span></div>
					<span class="bloco"><a class="contador inativo" style="width: <?php the_sub_field('bloco'); ?>%"></a></span>
					
				</div>
				
				<?php 
					endwhile;
				endif;
				?>
			</div>
		</div>
		
	</section>

	<section class="portfolio" id="portfolio">
		<div class="container">
			<h1 class="titulo1"><?php the_field('titulo_portfolio'); ?></h1>

			<div class="conteudo-wp">
				<?php the_field('texto_port'); ?>
			</div>
		</div>
		
		<div class="recent-works">
			<?php 
				if(have_rows('bloco_trabalhos')):
					while(have_rows('bloco_trabalhos')):
						the_row();
			?>
				<div class="bloco">
					<div class="img-wp" style="background-image: url(<?php the_sub_field('imagem'); ?>);" alt="<?php the_sub_field('tag_alt'); ?>">
						<span>
							<?php the_sub_field('conteudo'); ?>
							<a target="_blank" href="<?php the_sub_field('link'); ?>">
								<button>Visite o site</button>
							</a>
						</span>
					</div>
				</div>
			<?php 
				endwhile;
			endif;
			?>
		</div>
	</section>

	<section class="curiosidades">
		<div class="container">
			<h1 class="titulo1"><?php the_field('titulo_curio'); ?></h1>

			<div class="conteudo-wp col-md-6">
				<?php the_field('subtitulo_curio'); ?>
			</div>

			<div class="conteudo-wp2 col-md-6">
				<?php 
					if(have_rows('curiosidades')):
						while(have_rows('curiosidades')):
							the_row();
				?>
					
					<div class="bloco">
						<?php the_sub_field('texto'); ?>
					</div>
					
				<?php 
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>

	<?php /*
	<section class="blog" id="blog">
		<div class="container">
			<h1 class="titulo1"><?php the_field('titulo_blog'); ?></h1>
		</div>
		<div class="part-noticias">
			<?php 
				$destaque = new WP_Query('post_type=post&posts_per_page=4&');

				if($destaque->have_posts()):
					while($destaque->have_posts()):
						$destaque->the_post();
				?>
						
					<div class="color">
						<div class="bloco">
							<div class="img-wp" style="background-image:  url(<?php the_field('banner_blog'); ?>);">
							</div>
							<div class="conteudo-wp">
								<h1 class="titulo-noticia"><?php the_title(); ?></h1>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">
									<button>Visite o site</button>
								</a>
							</div>
						</div>
					</div>
						
			<?php
				endwhile;
				wp_reset_postdata();
			endif;

				?>
		</div>
		
		<div class="botao">
			<a target="_blank" href="<?php bloginfo('url') ?>/blog/">
				Chega Mais
			</a>
		</div>
		
	</section>
	*/ ?>
</main>	
<?php get_footer(); ?>