<?php // do not include opening tag

add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');
 
function translate_text($translated) {
 
$translated = str_ireplace('Read more', 'Weiterlesen', $translated);
$translated = str_ireplace('Close', 'Schliessen', $translated);
$translated = str_ireplace('next', 'Weiter', $translated);
 
return $translated;
}
