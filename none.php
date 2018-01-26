<?php

// Nonce: 24 hours key for specific action
$add_product_nonce = wp_create_nonce( 'mpc_add_product' );

// 1/2/false
wp_verify_nonce( $add_product_nonce, 'mpc_add_product' );

// echo/return HTML hidden fields
wp_nonce_field( 'mpc_add_product', $name = '_wpnonce', $referer = true, $echo = true );

// Edit specific product by ID
wp_nonce_field( 'mpc_edit_product_' . $product_id );

// 1/2/false
wp_verify_nonce( $_POST['_wpnonce'], 'mpc_edit_product_' . $product_id );

// Nonce lifetime filter hook > 'nonce_life'
// Other nonce functions @see https://codex.wordpress.org/WordPress_Nonces