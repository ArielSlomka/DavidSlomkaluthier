<?php function register_custom_menus() {
    register_nav_menus(
        array(
            'main-menu' => esc_html__('Main Menu', 'techarq'),
        )
    );
}

add_action('init', 'register_custom_menus');