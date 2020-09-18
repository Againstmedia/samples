<?php //do not include opening tag 

add_action( 'wp_enqueue_scripts', 'am_remove_atomic_block_css', 100 );
 
function am_remove_atomic_block_css(){
    wp_dequeue_style( 'atomic-blocks-fontawesome' );
}
