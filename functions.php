<?php
if ( function_exists('register_sidebar') )
register_sidebars(4,array(
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',));
?>