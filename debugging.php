<?php

// wp-config.php

// Plugins: Debug Bar + Query Monitor

// Enable WP_DEBUG mode
// Development = true
// Production = true
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
// Development = true
// Production = true
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
// Development = true
// Production = false
define( 'WP_DEBUG_DISPLAY', true );

// Development = E_ALL
// Production = 0
@ini_set( 'display_errors', E_ALL );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
// Development = true
// Production = false
define( 'SCRIPT_DEBUG', true );