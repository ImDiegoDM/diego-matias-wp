<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'projects',
    array(
      'labels' => array(
        'name' => __( 'Projetos' ),
        'singular_name' => __( 'Projeto' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-format-gallery',
    )
  );
}
 ?>
