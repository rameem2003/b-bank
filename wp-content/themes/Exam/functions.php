<?php

add_theme_support("widgets");

function allCss_Load()
{
    wp_enqueue_style('mystyle', get_theme_file_uri() . '/assets/css/mystyle.css');
}

add_action("wp_enqueue_scripts", "allCss_Load");


function slider()
{
    register_sidebar(array(
        "name" => "Banner",
        "id" => "banner"
    ));
}

add_action("widgets_init", "slider");
