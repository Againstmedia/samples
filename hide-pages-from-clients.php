<?php //do not include opening tag 

function am_exclude_pages_from_admin($query) {
    global $pagenow, $post_type;
    if (is_admin() && current_user_can('shop_manager') && $pagenow=='edit.php' && $post_type =='page') {
        $query->query_vars['post__not_in'] = array(
                        '6', // the home page
                        '9', // Blog Seite
                        '264', // Kassa
												'265', // Konto Seite
												'262', // Shop Seite
												'263' // Warenkorb Seite
                        );
    }
}

add_filter( 'parse_query', 'am_exclude_pages_from_admin' );
