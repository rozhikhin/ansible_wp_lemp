<?php
function my_login_failed_403() {
    status_header( 403 );
}
add_action( 'wp_login_failed', 'my_login_failed_403' );

