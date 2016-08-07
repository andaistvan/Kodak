<?php

add_theme_support('woocommerce');

// woocommerce breadcrump mods
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woo_header_breadcrump', 'woocommerce_breadcrumb');
