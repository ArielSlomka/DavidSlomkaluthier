<div class="navbar">
    <div class="navbar__box box-logo">
        <picture class="navbar__logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/logodslposta.png'; ?>" alt="logo">
        </picture>
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



<header class="header">
    <div class="header__container">
        <div class="header__titulos">
            <h1 class="header__titulo">David Slomka</h1>
            <h3 class="header__subtitulo">Luthier</h3>
        </div>
    </div>
</header>