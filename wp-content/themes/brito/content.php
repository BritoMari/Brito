<div class="part-noticias">
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
        
            
</div>