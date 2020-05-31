<?php 


// Add Button Shortcode
add_shortcode( 'button', 'button_shortcode' );

function button_shortcode( $atts  ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '/',
			'text' => '',
			'target' => '_self',
			'style'  => '',
			'formular' => '',
		), $atts )
	);
	
	$form = ( $formular != '' ) ? 'data-formtext="'.$formular.'"' : '';
	
	$output = '<a target="' . $target . '" class="button ' . $style . '" href="' . $link . '"' . $form .'>' . $text . '</a>';
	
	return $output;
	
}

?>