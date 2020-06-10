<?php
/*
Plugin Name: Подпись для статей
Description: Описание плагина
Version: 1.0
Author: Автор плагина
Author URI: http://webformyself.com
*/

add_filter( 'the_content', 'wfm_sign_content' );

function wfm_sign_content($content){
 if( !is_single() ) return $content;
 $wfm_sign = '<div class="alignright"><em>Лана, автор плагина</em></div>';
 return $content . $wfm_sign;
}
