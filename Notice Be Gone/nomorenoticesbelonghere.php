<?php
/*
Plugin Name: Notice Be Gone
Description: Hide admin notices ( Deactivate to display Notices. )
Version: 1.0
Author: Codelyfe
Url: https://codelyfe.github.io
*/

// Add a function to remove notices
function hide_admin_notices() {
    echo '
    <style>

    /* ~ WordPress ~ */
    .notice { display: none !important;} 
    .updated { display: none !important; }
    #adminmenu .awaiting-mod, #adminmenu .menu-counter, #adminmenu .update-plugins { display: none !important; }

    /* ~ Plugins ~ */

    /* WordFence */
    .wf-notification-count-value, .wf-menu-badge, .wf-notification-count-container { display:none !important; }

    /* Yoast */
    .yoast-notification .yoast-seo-icon-wrap { display: none !important; } 
    .yoast-notification{ display: none !important; }

    /* WP Code */
    .wpheaderandfooter-review-notice { display: none !important; }

    /* AIOSEO */
    #wpadminbar .aioseo-menu-notification-counter { display: none !important; }

    </style>
    ';
}

// Hook the function to the admin_head action
add_action('admin_head', 'hide_admin_notices');