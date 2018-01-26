<?php

// Respect system's settings

// get time based on the system's timezone
$time = current_time( 'timestamp' ); // int(187984654)
$time = current_time( 'mysql' ); // Y-m-d H:i:s => 2018-01-26 18:06:01

// get main blog page ID
$blog_page_time = get_option( 'page_for_posts' );

// system's date & time formats
$date_format   = get_option( 'date_format' );
$time_format   = get_option( 'time_format' );
$start_of_week = get_option( 'start_of_week' );

// Take advantage of WP's bundled libraries, ex:

// WP HTTP API library
// @see https://codex.wordpress.org/HTTP_API
$response = wp_remote_get( 'https://jsonplaceholder.typicode.com/posts' );
if ( 200 === wp_remote_retrieve_response_code( $response ) ) {
	$posts = json_encode( wp_remote_retrieve_body( $response ) );
}

// WP RSS feed reader/parser
// @uses https://codex.wordpress.org/HTTP_API
// @see https://codex.wordpress.org/Function_Reference/fetch_feed
$feed = fetch_feed( 'https://www.yahoo.com/news/rss/entertainment' );