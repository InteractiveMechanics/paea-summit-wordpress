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

function updateNumbers() {
    /* numbering the published posts, starting with 1 for oldest;
    / creates and updates custom field 'incr_number';
    / to show in post (within the loop) use <?php echo get_post_meta($post->ID,'incr_number',true); ?>
    / alchymyth 2010 */
    global $wpdb;
    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts 
                 WHERE $wpdb->posts.post_status = 'publish' 
                 AND $wpdb->posts.post_type = 'post' 
                 ORDER BY $wpdb->posts.post_date ASC";
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $counts = 0 ;
    if ($pageposts):
    foreach ($pageposts as $post):
        $counts++;
        add_post_meta($post->ID, 'incr_number', $counts, true);
        update_post_meta($post->ID, 'incr_number', $counts);
    endforeach;
endif;
}  

add_action ( 'publish_post', 'updateNumbers', 11 );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );

