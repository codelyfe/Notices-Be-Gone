<?php
/*
Plugin Name: Notice Be Gone
Description: Hide admin notices ( Deactivate to displays Notices. )
Version: 1.0
Author: Codelyfe
Url: https://codelyfe.github.io
*/

// Add a function to remove notices
function hide_admin_notices() {
    echo '
    <style>
    .notice {display: none !important;} 
    .updated {display: none !important;}
    .wf-notification-count-value, .wf-menu-badge, .wf-notification-count-container {display:none !important;}
    .yoast-notification .yoast-seo-icon-wrap { display: none !important; } .yoast-notification{ display: none !important; }
    </style>
    ';
}

// Hook the function to the admin_head action
add_action('admin_head', 'hide_admin_notices');