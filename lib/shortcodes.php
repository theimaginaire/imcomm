<?php
/* Shortcodes */
function company($atts=null, $content=null){
	$company = get_field('company', 'options');
	return $company;
}
add_shortcode('company', 'company');

function phone($atts=null, $content=null){
	$phone = get_field('phone', 'options');
	return $phone;
}
add_shortcode('phone', 'phone');

function email($atts=null, $content=null){
	$email = get_field('email', 'options');
	return $email;
}
add_shortcode('email', 'email');

function my_acc(){
    $myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
    if ( $myaccount_page_id ) {
      $myaccount_page_url = get_permalink( $myaccount_page_id );
    }
    return $myaccount_page_url;
}
add_shortcode('my_acc', 'my_acc');
?>