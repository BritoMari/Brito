<?php get_header(); the_post();?>

<main class="home">
	<section class="banner fadeIn">
		<div class="swiper-container" id="swiper-banner">
			<div class="swiper-wrapper">
				<?php 
					if(have_rows('rolo_imagens_banner')):
						while(have_rows('rolo_imagens_banner')):
							the_row();
				?>
				<div class="swiper-slide">	
					<div class="img-wp" style="background-image: url(<?php the_sub_field('imagem'); ?>);">
					
					</div>
					<?php 
					if(have_rows('titulo_e_subtitulo_banner')):
						while(have_rows('titulo_e_subtitulo_banner')):
							the_row();
					?>

						<div class="conteudo-wp">
							<h1 class="titulo"><?php the_sub_field('titulo'); ?></h1>
							<div class="subtitulo"><?php the_sub_field('subtitulo'); ?></div>
						</div>

					<?php 
						endwhile;
					endif;
					?>		
				</div>
				<?php 
					endwhile;
				endif;
				?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<a  class="logo-mobile-home" href="<?php bloginfo('url') ?>/home">
			<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_logo_rodape_img')); ?>" class="logo-rodape">
		</a>
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