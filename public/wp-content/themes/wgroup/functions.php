<?php

function main_setting( $mimes ) {

// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
    unset( $mimes['exe'] );

    return $mimes;
}
add_filter( 'upload_mimes', 'main_setting' );

