<?php

function printThemePath() {
   echo get_site_url() . '/wp-content/themes/' . get_template();
}

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


function create_custom_post_types() {
    register_post_type( 'outcomes',
        array(
            'labels' => array(
                'name' => __( 'Outcomes' ),
                'singular_name' => __( 'Outcome' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'outcomes' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

