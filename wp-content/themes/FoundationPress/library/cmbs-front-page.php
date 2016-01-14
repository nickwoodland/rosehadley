<?php
/* Code for custom metaboxes.
Requires CMB2, as managed by composer.
*/
add_action( 'cmb2_admin_init', 'f_p_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function f_p_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_rh_fp_';
    $fp_id = get_option('page_on_front');

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'fp_column_meta',
        'title'         => __( 'Columns', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_on'      => array( 'key' => 'id', 'value' => $fp_id ),
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Column 1', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'col_1',
        'type'       => 'wysiwyg',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Column 2', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'col_2',
        'type'       => 'wysiwyg',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

}
