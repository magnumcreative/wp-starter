<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_ctravel_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_ctravel_metaboxes( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb_';

    $meta_boxes['coupon_metabox'] = array(
        'id'         => 'coupon_metabox',
        'title'      => __( 'Coupon Values', 'cmb' ),
        'pages'      => array( 'cpt-coupons', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields'     => array(
            array(
                'name' => __( 'RSS headline', 'cmb' ),
                'desc' => __( 'This will be used in the RSS feed title instead of the post title', 'cmb' ),
                'id'   => $prefix . 'coupon_rss_title',
                'type' => 'text',
            ),
            array(
                'name' => __( 'VALID Coupon Code', 'cmb' ),
                'desc' => __( 'Enter unqiue coupon code that is valid for this specific offer', 'cmb' ),
                'id'   => $prefix . 'coupon_code',
                'type' => 'text_small',
            ),
            array(
                'name' => __( 'Value of redemtion', 'cmb' ),
                'desc' => __( 'Describes the redemtion value of this coupon', 'cmb' ),
                'default' => 'Use this code at checkout to redeem up to $200*',
                'id'   => $prefix . 'coupon_value',
                'type' => 'text_medium',
            ),
            array(
                'name' => __( 'Cash Value (up to)', 'cmb' ),
                'desc' => __( 'Cash value of coupon', 'cmb' ),
                'id'   => $prefix . 'coupon_cash_value',
                'default' => '200',
                'type' => 'text_money',
            ),
            array(
                'name' => 'Validation Dates',
                'desc' => 'Set the dates that this coupon will be valid for',
                'type' => 'title',
                'id' => $prefix . 'dates_title'
            ),
            array(
                'name' => __( 'Start date', 'cmb' ),
                'desc' => __( 'Day this coupon starts', 'cmb' ),
                'id'   => $prefix . 'coupon_start_date',
                'type' => 'text_date_timestamp',
            ),
            array(
                'name' => __( 'Done by', 'cmb' ),
                'desc' => __( 'Day the booking must be done by', 'cmb' ),
                'id'   => $prefix . 'coupon_done_date',
                'type' => 'text_date_timestamp',
            ),
            array(
                'name' => __( 'Must travel by', 'cmb' ),
                'desc' => __( 'Coupon is valid for packages that depart by this date', 'cmb' ),
                'id'   => $prefix . 'coupon_travel_date',
                'type' => 'text_date_timestamp',
            ),
            array(
                'name' => __( 'Expired date', 'cmb' ),
                'desc' => __( 'Deactivates the coupon once this date has passed', 'cmb' ),
                'id'   => $prefix . 'coupon_expire_date',
                'type' => 'text_date_timestamp',
            ),
            array(
                'name' => 'Misc copy',
                'desc' => 'If you wish to apply extra instructions',
                'type' => 'title',
                'id' => $prefix . 'dates_title'
            ),
            array(
                'name'    => __( 'Redemtion Instructions', 'cmb' ),
                //'desc'    => __( 'field description (optional)', 'cmb' ),
                'id'      => $prefix . 'coupon_instrutions',
                'type'    => 'wysiwyg',
                'default' => 'Once you have found your vacation package and have proceeded to checkout just look for the coupon code field like the one shown below to apply your discount. Applicable terms and conditions will apply.',
                'options' => array(
                        'wpautop' => true, // use wpautop?
                        'media_buttons' => false, // show insert/upload button(s)
                        'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                        'textarea_rows' => get_option('default_post_edit_rows', 3), // rows="..."
                        'tabindex' => '',
                        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                        'editor_class' => '', // add extra class(es) to the editor textarea
                        'teeny' => true, // output the minimal editor config used in Press This
                        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
                    ),
            ),
            array(
                'name'    => __( 'Dislaimer', 'cmb' ),
                //'desc'    => __( 'field description (optional)', 'cmb' ),
                'id'      => $prefix . 'coupon_displaimer',
                'type'    => 'wysiwyg',
                'default' => 'This coupon is **valid for Packages ONLY. *Coupon value will depend on the final booking price. Valid for packages (air & hotel) to any Sun or Europe destination. Promotion can be withdrawn at anytime without notice. Coupon is per booking and NOT per person. Coupon cannot be used in conjunction with any other coupon or rebate offer. Not valid with some tour operators. Only one coupon per booking.',
                'options' => array(
                        'wpautop' => true, // use wpautop?
                        'media_buttons' => false, // show insert/upload button(s)
                        'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
                        'textarea_rows' => get_option('default_post_edit_rows', 3), // rows="..."
                        'tabindex' => '',
                        'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
                        'editor_class' => '', // add extra class(es) to the editor textarea
                        'teeny' => true, // output the minimal editor config used in Press This
                        'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
                        'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
                        'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
                    ),
            ),
        ),
    );

    /**
     * Metabox to be displayed on a single page ID
     */
    $meta_boxes['coupon_softvoyage'] = array(
        'id'         => 'coupon_softvoyage',
        'title'      => __( 'Softvoyage Variables', 'cmb' ),
        'pages'      => array( 'cpt-coupons', ), // Post type
        'context'    => 'side',
        'priority'   => 'low',
        'show_names' => true, // Show field names on the left
        'fields'     => array(
            array(
                'name' => 'Price Range (low)',
                'desc' => 'Define lowest price range',
                'id' => $prefix . 'coupon_softvoyage_price_low',
                'type' => 'text_money',
                // 'before' => '£', // Replaces default '$'
            ),
            array(
                'name' => 'Price Range (high)',
                'desc' => 'Define highest price range',
                'id' => $prefix . 'coupon_softvoyage_price_high',
                'type' => 'text_money',
                // 'before' => '£', // Replaces default '$'
            ),
            array(
                'name' => 'Apply to',
                //'desc' => 'Set the tour oporators this coupon is active for',
                'id' => $prefix . 'coupon_apply_to_multicheckbox',
                'type' => 'radio',
                'options' => array(
                    'check1' => 'Flights',
                    'check2' => 'Packages',
                ),
                'default' => 'check2',
            ),
            array(
                'name' => 'Tour Operator',
                //'desc' => 'Set the tour oporators this coupon is active for',
                'id' => $prefix . 'coupon_tour_op_multicheckbox',
                'type' => 'multicheck',
                'options' => array(
                    'air_canada' => 'Air Canada',
                    'transit' => 'Transit',
                    'nolitour' => 'Nolitour',
                    'wesjet' => 'Westjet',
                    'sunwing' => 'Sun Wing',
                    'sunquest' => 'Sunquest',
                ),
                'default' => array('air_canada', 'sunquest', 'sunwing'),
            ),
            array(
                'name' => 'Gateways',
                //'desc' => 'Set the tour oporators this coupon is active for',
                'id' => $prefix . 'coupon_gateways_multicheckbox',
                'type' => 'multicheck',
                'options' => array(
                    'check1' => 'Check One',
                    'check2' => 'Check Two',
                    'check3' => 'Check Three',
                )
            ),
            array(
                'name' => 'Destinations',
                //'desc' => 'Set the tour oporators this coupon is active for',
                'id' => $prefix . 'coupon_destinations_multicheckbox',
                'type' => 'multicheck',
                'options' => array(
                    'check1' => 'Check One',
                    'check2' => 'Check Two',
                    'check3' => 'Check Three',
                )
            ),
            array(
                'name' => 'Hotels (if destination specific)',
                //'desc' => 'Set the tour oporators this coupon is active for',
                'id' => $prefix . 'coupon_hotels_multicheckbox',
                'type' => 'multicheck',
                'options' => array(
                    'check1' => 'Check One',
                    'check2' => 'Check Two',
                    'check3' => 'Check Three',
                )
            ),
        )
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}

// ********* BELOW NOT REQUIRED *********** --> Initialize metabox class done in mu-plugins/load.php
//
// add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
// /**
//  * Initialize the metabox class.
//  */
// function cmb_initialize_cmb_meta_boxes() {

//     if ( ! class_exists( 'cmb_Meta_Box' ) )
//         require_once 'init.php';

// }
