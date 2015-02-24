<?php
/*
Plugin Name: Post Update Notification
Plugin URI: https://vsni.co.uk
Description: Notifies administrators by email when posts are updated
Version: 0.1
Author: Ian Channing
Author URI: https://klever.co.uk
*/

/**
 * Send an email to admin when a post is updated
 *
 * @link http://wordpress.stackexchange.com/questions/60378/notify-admin-when-page-is-edited/60417
 *
 * @param integer $post_id
 * @return none
 */
function icc_pun_send_email( $post_id ) {
	// If this is just a revision, don't send the email.
	if ( wp_is_post_revision( $post_id ) ) {
		return;
	}

	$current_user = wp_get_current_user();

	$subject = sprintf( 
			__( "[%s] Updated post", 'post-update-notification' ), 
			get_option( 'blogname' ) 
	);
	
	$message = sprintf(
			__( '%1$s (%2$s) updated by %3$s', 'post-update-notification' ), 
			get_the_title( $post_id ), 
			get_permalink( $post_id ), 
			$current_user->user_login
	);

	// Send email to admins.
	$administrators = get_users( array( 'role' => 'Administrator' ) );
	foreach ( $administrators as $administrator ) {
		$emails[] = $administrator->user_email;
	}
	wp_mail( $emails, $subject, $message );
}

add_action( 'save_post', 'icc_pun_send_email' );

function icc_pun_textdomain () {
	load_plugin_textdomain( 'post-update-notification', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'icc_pun_textdomain' );
