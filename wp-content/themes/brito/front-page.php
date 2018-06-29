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
				<div class="conteudo-wp">
					<h1 class="titulo"><?php the_sub_field('titulo'); ?></h1>
					<h2 class="subtitulo"><?php the_sub_field('subtitulo'); ?></h1>
				</div>
				<span class="icone-chave2">}</span>
		<?php 
			endwhile;
		endif;
		?>
	</section>
	

	<section class="about-me">
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
	<section class="noticias">
		<h1 class="titulo11"><?php the_field('titulo_noticias'); ?></h1>
		<div class="part-noticias">
		<?php 
				$destaque = new WP_Query('post_type=post&posts_per_page=4&');

				if($destaque->have_posts()):
					while($destaque->have_posts()):
						$destaque->the_post();
				?>
						
					<div class="color">
						<a href="<?php the_permalink(); ?>">
							<div class="img-wp" style="background-image:  url(<?php the_field('banner_noticias'); ?>);">
								<div class="conteudo-wp">
									<h1 class="titulo-noticia"><?php the_title(); ?></h1>
									<?php the_excerpt(); ?>
								</div>
							</div>
							<span><i class="fas fa-plus"></i></span>
						</a>
					</div>
						
				<?php
					endwhile;
					wp_reset_postdata();
				endif;

				 ?>
				 </div>
	</section>
	<section class="noticias">
		<h1 class="titulo11"><?php the_field('titulo_noticias'); ?></h1>
		<div class="part-noticias">
		<?php 
				$destaque = new WP_Query('post_type=post&posts_per_page=4&');

				if($destaque->have_posts()):
					while($destaque->have_posts()):
						$destaque->the_post();
				?>
						
					<div class="color">
						<a href="<?php the_permalink(); ?>">
							<div class="img-wp" style="background-image:  url(<?php the_field('banner_noticias'); ?>);">
								<div class="conteudo-wp">
									<h1 class="titulo-noticia"><?php the_title(); ?></h1>
									<?php the_excerpt(); ?>
								</div>
							</div>
							<span><i class="fas fa-plus"></i></span>
						</a>
					</div>
						
				<?php
					endwhile;
					wp_reset_postdata();
				endif;

				 ?>
				 </div>
	</section>
	<section class="noticias">
		<h1 class="titulo11"><?php the_field('titulo_noticias'); ?></h1>
		<div class="part-noticias">
		<?php 
				$destaque = new WP_Query('post_type=post&posts_per_page=4&');

				if($destaque->have_posts()):
					while($destaque->have_posts()):
						$destaque->the_post();
				?>
						
					<div class="color">
						<a href="<?php the_permalink(); ?>">
							<div class="img-wp" style="background-image:  url(<?php the_field('banner_noticias'); ?>);">
								<div class="conteudo-wp">
									<h1 class="titulo-noticia"><?php the_title(); ?></h1>
									<?php the_excerpt(); ?>
								</div>
							</div>
							<span><i class="fas fa-plus"></i></span>
						</a>
					</div>
						
				<?php
					endwhile;
					wp_reset_postdata();
				endif;

				 ?>
				 </div>
	</section>
	<section class="noticias">
		<h1 class="titulo11"><?php the_field('titulo_noticias'); ?></h1>
		<div class="part-noticias">
		<?php 
				$destaque = new WP_Query('post_type=post&posts_per_page=4&');

				if($destaque->have_posts()):
					while($destaque->have_posts()):
						$destaque->the_post();
				?>
						
					<div class="color">
						<a href="<?php the_permalink(); ?>">
							<div class="img-wp" style="background-image:  url(<?php the_field('banner_noticias'); ?>);">
								<div class="conteudo-wp">
									<h1 class="titulo-noticia"><?php the_title(); ?></h1>
									<?php the_excerpt(); ?>
								</div>
							</div>
							<span><i class="fas fa-plus"></i></span>
						</a>
					</div>
						
				<?php
					endwhile;
					wp_reset_postdata();
				endif;

				 ?>
				 </div>
	</section>
</main>	
<?php get_footer(); ?>