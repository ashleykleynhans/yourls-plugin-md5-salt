# YOURLS plugin to use md5 salt

## Description

The [YOURLS](https://github.com/YOURLS/YOURLS) Open Source URL shortener used
an `md5` hash within the `yourls_salt` function in version 1.7.4, but somewhere
between 1.7.4 and 1.9.1, this was changed to use `hash_hmac` with a default
`yourls_hmac_algo` of `sha256`.

If you were using the Secret signature token for Secure passwordless API
calls in version 1.7.4 and then upgraded to version 1.9.1, this change would
cause the token to change, thus causing the API calls to fail.

This plugin provides backwards compatibiliy for the `yours_salt` function to
continue to use `md5`, so that upgrading YOURLS from 1.7.4 to 1.9.1 does not
cause API calls to stop working.

### Installation

1.  Clone the repo
    ```bash
    cd /tmp
    git clone https://github.com/ashleykleynhans/yourls-plugin-md5-salt.git
    ```
2.  Copy the plugin to your YOURLS code
   ```bash
   cd yourls-plugin-md5-salt
   cp -r yourls-plugin-md5-salt /var/www/html/user/plugins
   ```
3.  Enable the plugin in the YOURLS admin interface in your web browser.
