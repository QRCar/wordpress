<?php

function qrcar_custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'qrcar_custom_excerpt_length' );

function qrcar_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<span>%1$s</span>',
            __( '...', 'textdomain' )
        );
    }

    return $more;
}

add_filter( 'excerpt_more', 'qrcar_excerpt_more' );
