/**
    Plugin Name: md5 salt
    Description: Provide backwards compatibility for the yourls_salt function
                 to use md5 instead of the default of sha256, so that secure
                 passwordless API calls continue to function after upgrading
                 from YOURLS 1.7.4 to 1.9.1
    Version:     0.1
    Author:      Ashley Kleynhans
**/

yourls_add_filter('hmac_algo', 'set_hmac_algo_to_md5');

function set_hmac_algo_to_md5() {
    return 'md5';
}
