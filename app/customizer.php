<?php
// Add Logo to customizer
// Do not forget to add this file to your Sage required files array in resources/function.php
function dvrs_logo() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'dvrs_logo');
