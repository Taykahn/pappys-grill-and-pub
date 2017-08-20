<?php
/**
 * Custom post types
 */


//Instantiate new class object
$featured_items = new MBC_Theme( 'featured_items' );

$featured_items->mbc_build_cpt( 'featured-items', 'Featured Items', 'Featured Items', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$specials = new MBC_Theme( 'specials' );

$specials->mbc_build_cpt( 'specials', 'Weekly Specials', 'Weekly Specials', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$pappys_menu = new MBC_Theme( 'pappys_menu' );

$pappys_menu->mbc_build_cpt( 'pappys-menu', 'Pappys Menu', 'Pappys Menu', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$pappys_breakfast = new MBC_Theme( 'pappys_breakfast' );

$pappys_breakfast->mbc_build_cpt( 'pappys-breakfast', 'Pappys Breakfast', 'Pappys Breakfast', $supports = array(), $settings = array(), $has_arch = true, $hier = true);