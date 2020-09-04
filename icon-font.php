<?php //do not include openeing tag

/* Font Awesome über CDN einbinden */
function stylesheet_von_fontawesome_einbinden() { wp_enqueue_style ('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'); } add_action('wp_enqueue_scripts', 'stylesheet_von_fontawesome_einbinden');
