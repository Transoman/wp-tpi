<?php
/**
 * URLs
 */

$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
//$wp_home = 'http://tpi.loc';
$wp_home = $protocol . $_SERVER['SERVER_NAME'];
$wp_siteurl = $wp_home . '/wp';

define( 'WP_HOME', $wp_home );
define( 'WP_SITEURL', $wp_siteurl );