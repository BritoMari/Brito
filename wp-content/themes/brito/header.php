<!DOCTYPE html>
<html lang="pt-BR">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title><?php the_title(); ?> - Brito</title>
    <meta name=”description” content="Olá, sou Mariana Brito Desenvolvedora Web e..." />
    <meta property="og:title" content="Brito">
    <meta property="og:site_name" content="Brito">
    <meta property="og:description" content="Olá, sou Mariana Brito Desenvolvedora Web e...">
    <meta property="og:image" content="http://www.brito.com.br/image/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="354">
    <meta property="og:image:height" content="354">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.brito.com.br">

    <title><?php the_title(); ?> - Brito</title>
    
    <?php wp_head(); ?>
    
	</head>

<body <?php body_class('fadeIn'); ?>>
	<header class="topo transparent">
        <div class="container text-right">

           
            <input id="menu" type="checkbox" />
            <label for="menu" class="container-menu">
                <div class="menu-button"></div>
            </label>
        	<nav class="menu_geral">
				<ul class="menu_info">
				<div class="menu_links">
                    <div class="menu-menu-principal-container">
                        <ul class="menu">
                            <li class="menu-item ativo">
                                <a href="<?php bloginfo('url') ?>/home/">Home</a>
                            </li>
                            <li class="menu-item ativo">
                                <a href="#sobre-mim">Sobre Mim</a>
                            </li>
                            <li class="menu-item ativo">
                                <a href="#habilidades">Habilidades</a>
                            </li>
                            <li class="menu-item ativo">
                                <a href="#portfolio">Portfólio</a>
                            </li>
                            <li class="menu-item ativo">
                                <a href="https://medium.com/@marianabriito" target="_blank">Blog</a>
                            </li>
                            <div class="bloco">
                            <li class="menu-item">
                                <a href="https://github.com/BritoMari" target="_blank" class="icon"><i class="fab fa-github-alt"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="https://codepen.io/BritoMari/" target="_blank" class="icon"><i class="fab fa-codepen"></i></a>
                            </li>
                            </div>
                        </ul>
                    </div>  
				</div>  
            </nav>

        </div>

   </header>