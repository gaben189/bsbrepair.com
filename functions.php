<?php
//Set Parent and Child CSS
function cws_bobcat_enqueue_styles()
{
    $parent_style = 'bobcat-parent-style'; // This is the tag used in the parent theme to register its stylesheet.
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bobcat-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'cws_bobcat_enqueue_styles');

//Call In JS
function cws_bobcat_scripts() {
    //Child JS
    wp_enqueue_script( 'my-child-scripts', get_stylesheet_directory_uri() . '/assets/js/child-scripts.js'  );
}
add_action('wp_footer', 'cws_bobcat_scripts');


//Call In Fonts and CSS
function cws_bobcat_required_files()
{
    //Google Fonts
    wp_enqueue_style('my-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,700,900', false);
}
add_action('wp_enqueue_scripts', 'cws_bobcat_required_files');

/* Header Partial Files Declaration */

    /* Display the Header Logo*/
    function display_header_phone_number()
    {
        include 'assets/partials/header-phone-number.php';
    }
    add_action('header_phone_number', 'display_header_phone_number');
    
    function display_header_logo()
    {
        include 'assets/partials/header-logo.php';
    }
    add_action('header_logo', 'display_header_logo');

    function display_header_locations()
    {
        include 'assets/partials/header-locations.php';
    }
    add_action('header_locations', 'display_header_locations');


/* Footer Partial Files Declaration */

    /**
     * Display the Dealer Logo.
     */
    function display_dealer_logo()
    {
        include 'assets/partials/dealer-logo.php';
    }
    add_action('dealer_logo', 'display_dealer_logo');

    /**
     * Display the Footer Logo.
     */
    function display_footer_logo()
    {
        include 'assets/partials/footer-logo.php';
    }
    add_action('footer_logo', 'display_footer_logo');

    /**
     * Display the Footer Contact List.
     */
    function display_footer_contact()
    {
        include 'assets/partials/footer-contact.php';
    }
    add_action('footer_contact', 'display_footer_contact');

    /**
     * Display the Footer Location List.
     */
    function display_footer_locations()
    {
        include 'assets/partials/footer-locations.php';
    }
    add_action('footer_locations', 'display_footer_locations');

    /**
     * Display the Footer Quick Links Additions.
     */
    function display_footer_quicklinks()
    {
        include 'assets/partials/footer-quicklinks.php';
    }
    add_action('footer_quicklinks', 'display_footer_quicklinks');

    /**
     * Display the Footer Social Media.
     */
    function display_footer_social()
    {
        include 'assets/partials/footer-social.php';
    }
    add_action('footer_social', 'display_footer_social');
