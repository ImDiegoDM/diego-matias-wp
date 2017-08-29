<?php
add_action( 'init', 'create_post_type' );

add_filter( 'jetpack_enable_open_graph', '__return_false' );

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
      'menu_icon' => 'dashicons-format-image',
      'supports' => array('title','author')
    )
  );

  register_post_type( 'projects_group',
    array(
      'labels' => array(
        'name' => __( 'Grupos de Projeto' ),
        'singular_name' => __( 'Grupo de Projeto' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 7,
      'menu_icon' => 'dashicons-format-gallery',
      'supports' => array('title','author')
    )
  );

  register_post_type( 'infos',
    array(
      'labels' => array(
        'name' => __( 'Informações finais' ),
        'singular_name' => __( 'Informação final' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 7,
      'menu_icon' => 'dashicons-info',
    )
  );

  register_post_type( 'forms',
    array(
      'labels' => array(
        'name' => __( 'Formularios' ),
        'singular_name' => __( 'Formulario' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 7,
      'menu_icon' => 'dashicons-media-text',
      'supports' => array('title','author')
    )
  );

  register_post_type( 'contact_medias',
    array(
      'labels' => array(
        'name' => __( 'Social Medias' ),
        'singular_name' => __( 'Social Media' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 7,
      'menu_icon' => 'dashicons-phone',
      'supports' => array('title','author')
    )
  );
}

function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '79e6bb7eaed7d1';
  $phpmailer->Password = 'a7790b458fa607';
}

add_action('phpmailer_init', 'mailtrap');

function send_message(){
  function wpdocs_set_html_mail_content_type() {
      return 'text/html';
  }
  add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

  $body = "<style>
  body{
      text-align:center;
    }
  </style>
  <h3>
  Você acabou de receber uma mensagem!
  </h3>
  <p>
  de:<strong> ".$_POST['name']."</strong> email: <strong>".$_POST['email']."</strong>
  </p>
  <p>
  mensagem:
  </p>
  <p>
  ".$_POST['message']."
  </p>";

  $response = wp_mail('contato@diegomatias.com.br','Mensagem de '.$_POST['name'],$body);

  remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
}

add_action( 'admin_post_nopriv_contact_form', 'send_message' );
add_action( 'admin_post_contact_form', 'send_message' );

?>
