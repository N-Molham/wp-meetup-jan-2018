<?php

// PHP interal filters
$name = filter_input( INPUT_POST, 'product_name', FILTER_SANITIZE_STRING );

// WordPress sanitize & validate functions
$name = sanitize_text_field( filter_input( INPUT_POST, 'product_name', FILTER_SANITIZE_STRING ) );

$age = absint( '-18' );

$description = sanitize_textarea_field( $_POST['product_desc'] );

// Just sanitize email
$email = sanitize_email( $_POST['user_email'] );

// Validate email
// false/string
$email = is_email( $_POST['user_email'] );

// also sanitize outputs as well ex: esc_html, esc_attr
// @see https://codex.wordpress.org/Data_Validation