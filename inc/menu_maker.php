<?php
///create  function using registar_theme_menus() inside it, and adding parameters in the array
function register_theme_menus(){
    register_nav_menus(
        array(
            'desktop' => _( 'Desktop Menu'),
            'nav-dropdown' => _( 'Nav Drop Down' ),
            'footer-menu' => _( 'Footer Menu')
        )
    );
}
//don’t forget to call the function… like this
add_action( 'init', 'register_theme_menus');
