<?php 
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );


    function wpproject_attachments( $attachments )
    {
      $fields         = array(
        array(
          'name'      => 'title',    
          'type'      => 'text',
          'label'     => __( 'Title', 'wpproject' ),
          'default'   => 'title'
        ),
      );
    
      $args = array(
        'label'         => 'Featured Slider',
        'post_type'     => array( 'post'),
        'filetype'      => array("image"),
        'note'          => 'Add Slider Images!',
        'button_text'   => __( 'Add Files', 'wpproject' ),
        'fields'        => $fields,
      );
    
      $attachments->register( 'slider', $args );
    }
    
    add_action( 'attachments_register', 'wpproject_attachments' );

