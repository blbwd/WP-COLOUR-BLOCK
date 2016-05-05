<?php
/*
Plugin Name: WP Colour Block
Plugin URI: https://github.com/blbwd/WP-COLOUR-BLOCK
Description: This plugin creates colourful text blocks inside your WordPress post or page.
Author: Sanjay Bhowmick
Version: 1.0
Author URI: http://bit.ly/1TL91Ir
*/

function wp_colour_block($parameters,$content)
{
	$output = '';

	$wp_cb_atts = shortcode_atts( array(
        'background-colour' => 'blue',
        'text-colour' => 'white',
        'font-size' => '16px'

    ), $parameters );

   $output .= '<div style="background-color:' . $wp_cb_atts['background-colour'] . '; color:'. $wp_cb_atts['text-colour'] .';padding: 20px;font-size:'. $wp_cb_atts['font-size'] .'">' . $content . '</div>';


    return $output;
}
add_shortcode( 'wp-colour-block', 'wp_colour_block' );
?>
