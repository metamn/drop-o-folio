<?php
	
	// User registration
	// - remove "Required field" ... otherwise not possible via CSS
	add_filter( 'wpmem_register_form', 'my_register_form_filter' );
	function my_register_form_filter( $form ){
		$form = str_replace("Required field", '', $form);
		return $form;
	}
	
?>