<?php
/*
Plugin Name: Set HMAC algorithm to MD5
Plugin URI: https://github.com/ashleykleynhans/yourls-plugin-md5-salt
Description: Backwards compatibility for yourls_salt to use md5 instead of sha256 algorithm.
Version: 1.0
Author: Ashley Kleynhans
Author URI: https://github.com/ashleykleynhans
*/

yourls_add_filter('hmac_algo', 'set_hmac_algo_to_md5');

function set_hmac_algo_to_md5() {
    return 'md5';
}
