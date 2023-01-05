<?php
/*
Plugin Name: Legacy MD5 salt
Plugin URI: https://github.com/ashleykleynhans
Description: Backwards compatibility for yourls_salt to use an md5 instead of sha256 hash.
Version: 1.0
Author: Ashley Kleynhans
Author URI: https://github.com/ashleykleynhans
*/

yourls_add_filter('yourls_salt', 'legacy_md5_salt');

function legacy_md5_salt($sauted_hash, $original_value) {
    $salt = defined('YOURLS_COOKIEKEY') ? YOURLS_COOKIEKEY : md5(__FILE__) ;
    return md5($original_value . $salt);
}
