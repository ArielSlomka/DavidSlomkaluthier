<div class="navbar" id="<?php echo is_page_template( 'templates/template-index.php' ) ? 'js-navbar' : 'no-js'; ?>">
    <div class="navbar__box box-logo">
        <a href="<?php echo home_url(); ?>" class="navbar__logo">
            <picture>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/logodslposta.png'; ?>" alt="logo">
            </picture>
        </a>
    </div>
    <div class="navbar__box box-menu">
        <?php
            // Display the navigation menu
            wp_nav_menu(array(
            'theme_location' => 'main-menu', // Change this to your registered menu location
            'menu_class'     => 'main-menu',
            'container'      => 'div',
            'container_class' => 'nav',
        ));
        ?>
    </div>
</div>
</div>
    
<header class="header">
    <div class="header__container">
        <div class="header__titulos">
            <h1 class="header__titulo">David Slomka <span class="header__subtitulo">luthier</span></h1>
        </div>
    </div>
</header>