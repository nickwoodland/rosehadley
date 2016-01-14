<?php
/* Code for custom metaboxes.
Requires CMB2, as managed by composer.
*/
add_action( 'cmb2_admin_init', 'page_banner_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function page_banner_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_rh_page_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'banner_meta',
        'title'         => __( 'Banner Info', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Banner Heading', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'banner_heading',
        'type'       => 'text',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Banner Subheading', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'banner_subheading',
        'type'       => 'text',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Banner Text', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'banner_text',
        'type'       => 'wysiwyg',
        'options'    =>  array(
            'teeny' => true,
            'media_buttons' => false,
            'textarea_rows' => get_option('default_post_edit_rows', 6),
        ),
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Banner Image', 'cmb2' ),
        'desc'    => 'Upload an image or enter an URL.',
        'id'         => $prefix . 'banner_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
        //    'url' => false, // Hide the text input for the url
            'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );


    // Add other metaboxes as needed

}
