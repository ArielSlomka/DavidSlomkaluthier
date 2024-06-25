<?php
// Display the navigation menu
wp_nav_menu(array(
    'theme_location' => 'main-menu', // Change this to your registered menu location
    'menu_class'     => 'main-menu',
    'container'      => 'div',
    'container_class' => 'nav',
));
?>

<header class="header">
    <div class="header__container">
        <div class="header__titulos">
            <h1 class="header__titulo">David Slomka</h1>
            <h3 class="header__subtitulo">Luthier</h3>
        </div>
    </div>
</header>