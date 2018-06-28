<?php get_header();?>

<main class="page-noticias fadeIn">
    <h1 class="titulo11">Notícias</h1>

    <div class="conteudo-wp">
        <div class="container">    
            <?php echo get_theme_mod('set_banner_texto') ?>
        </div>
    </div>

	<section class="artigos">
		<div class="container">
		<div class="bloco-dois col-md-2 pull-right">
				<?php 
					if ( is_active_sidebar('sidebar-1')){
							dynamic_sidebar('sidebar-1'); 
					}
					
					?>
					
			</div>

			<div class="bloco col-md-10">
				<?php         
					if(have_posts()) :         
					while(have_posts()):
						 the_post();
				?>

				<?php get_template_part('content', get_post_format()); ?>

				<?php
					endwhile;
				 the_posts_pagination(array(
						'next_text'		=>	'<i class="mais mostrar-itens" ">Mais Notícias</i>'
					  )); ?>

					 <?php  
						 wp_reset_postdata(); 
					endif;
				?>
			</div>
			
		</div>		
	</section>
    
    <section class="empreendimentos-slide"><?php require 'template-parts/empreendimentos-slide.php'; ?></section>
</main>
<?php get_footer(); ?>