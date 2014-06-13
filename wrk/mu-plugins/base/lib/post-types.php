<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/** ================ DEALS CPT ===============================
 * The following registers the cpt "deals"
 */
add_action('init', 'register_deals_post_type');

function register_deals_post_type() {
  $labels = array(
    'name'               => 'Deals',
    'singular_name'      => 'Deal',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Deal',
    'edit_item'          => 'Edit Deal',
    'new_item'           => 'New Deal',
    'view_item'          => 'View Deals',
    'search_items'       => 'Search Deals',
    'not_found'          => 'No Deals found',
    'not_found_in_trash' => 'No Deals found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Deals'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false, // setting this to true will disable taxonomies from having archive abilities
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'deals'),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => true, // set this to true to disable post sorting
    'menu_position'       => 40,
    'menu_icon'           => 'dashicons-megaphone',
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
  );
  register_post_type('cpt-deals', $args);
  //flush_rewrite_rules();
}

/** ================ ADVENTURE TRAVEL CPT ====================
 * The following registers the cpt "adventure travel"
 */
add_action('init', 'register_adventure_travel_post_type');

function register_adventure_travel_post_type() {
  $labels = array(
    'name'               => 'Adventure',
    'singular_name'      => 'Adventure',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Adventure',
    'edit_item'          => 'Edit Adventure',
    'new_item'           => 'New Adventure',
    'view_item'          => 'View Adventure',
    'search_items'       => 'Search Adventures',
    'not_found'          => 'No Adventures found',
    'not_found_in_trash' => 'No Adventures found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Adventure'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false, // setting this to true will disable taxonomies from having archive abilities
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'adventure'),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false, // set this to true to disable post sorting
    'menu_position'       => 41,
    'menu_icon'           => 'dashicons-location-alt',
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
  );
  register_post_type('cpt-adventure', $args);
}


/** ================ COUPON CPT ====================
 * The following registers the cpt "coupon"
 */
add_action('init', 'register_coupon_post_type');

function register_coupon_post_type() {
  $labels = array(
    'name'               => 'Coupons',
    'singular_name'      => 'Coupon',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Coupon',
    'edit_item'          => 'Edit Coupon',
    'new_item'           => 'New Coupon',
    'view_item'          => 'View Coupon',
    'search_items'       => 'Search Coupons',
    'not_found'          => 'No Coupons found',
    'not_found_in_trash' => 'No Coupons found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Coupon'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false, // setting this to true will disable taxonomies from having archive abilities
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'coupons'),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false, // set this to true to disable post sorting
    'menu_position'       => 41,
    'menu_icon'           => 'dashicons-tickets',
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
  );
  register_post_type('cpt-coupons', $args);
}

/** ================ CRUISES CPT ====================
 * The following registers the cpt "Cruises"
 */
add_action('init', 'register_cruises_post_type');

function register_cruises_post_type() {
  $labels = array(
    'name'               => 'Cruises',
    'singular_name'      => 'Cruise',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Cruise',
    'edit_item'          => 'Edit Cruise',
    'new_item'           => 'New Cruise',
    'view_item'          => 'View Cruise',
    'search_items'       => 'Search Cruises',
    'not_found'          => 'No Cruises found',
    'not_found_in_trash' => 'No Cruises found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Cruises'
  );
  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false, // setting this to true will disable taxonomies from having archive abilities
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'cruises'),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false, // set this to true to disable post sorting
    'menu_position'       => 41,
    'menu_icon'           => 'dashicons-sos',
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
  );
  register_post_type('cpt-cruises', $args);
}


/**
* Add a dashboard separator to the custom_post_types created above
* The separator is added after menu #30, the Comments menu
* This helps keep things a bit cleaner on the admin menu for the client
* and groups these new post_types together on the menu
*/

/**
 * Create Admin Menu Separator
 **/
add_action('admin_menu','admin_menu_separator');

function add_admin_menu_separator($position) {

    global $menu;
    $index = 0;

    foreach($menu as $offset => $section) {
        if (substr($section[2],0,9)=='separator')
            $index++;
        if ($offset>=$position) {
            $menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
            break;
        }
    }

    ksort( $menu );
}

/**
 * Adds Admin Menu Separators
 **/
function admin_menu_separator() {

    // Adds custom separator after comments
    add_admin_menu_separator(30);
}