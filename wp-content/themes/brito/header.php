<!DOCTYPE html>
<html lang="pt-BR">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title><?php the_title(); ?> - Brito</title>
    
    <?php wp_head(); ?>
    
	</head>

<body <?php body_class('fadeIn'); ?>>
	<header class="topo transparent">
        <div class="container text-right">

            <input type="checkbox" id="menu">
		    <label class="abre_menu" for="menu"><span></span></label>

        	<nav class="menu_geral">
				<ul class="menu_info">
				<div class="menu_links">
                    <div class="menu-menu-principal-container">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#home">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#sobre-mim">Sobre Mim</a>
                            </li>
                            <li class="menu-item">
                                <a href="#portfolio">Portfólio</a>
                            </li>
                            <li class="menu-item">
                                <a href="#blog">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://github.com/BritoMari" target="_blank" class="icon"><i class="fab fa-github"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="https://codepen.io/BritoMari/" target="_blank" class="icon"><i class="fab fa-codepen"></i></a>
                            </li>
                        </ul>
                    </div>  
				</div>  
            </nav>

        </div>

   </header>