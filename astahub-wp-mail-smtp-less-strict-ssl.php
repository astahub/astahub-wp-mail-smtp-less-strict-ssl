<?php
/*
Plugin Name: Astahub - WP Mail SMTP Less Strict SSL
Plugin URI: https://github.com/astahub/astahub-wp-mail-smtp-less-strict-ssl
Description: Custom option to make the WP Mail SMTP plugin SSL verification to less strict
Author: harisrozak
Author URI: https://github.com/harisrozak
Version: 0.1
Text Domain: astahub-wp-mail-smtp-less-strict-ssl
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_filter( 'wp_mail_smtp_custom_options', 'astahub_wp_mail_smtp_do_less_strict_ssl', 10, 1 );

function astahub_wp_mail_smtp_do_less_strict_ssl( $phpmailer ) {
    $phpmailer->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
	
    return $phpmailer;
}