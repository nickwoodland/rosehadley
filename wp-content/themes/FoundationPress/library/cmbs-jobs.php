<?php
/* Code for custom metaboxes.
Requires CMB2, as managed by composer.
*/
add_action( 'cmb2_admin_init', 'jobs_form_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function jobs_form_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_rh_jobs_';


    $options[0]='Please select...';
    if( class_exists( RGFormsModel ) ) {
        foreach( RGFormsModel::get_forms(null, 'title') AS $form):
            $options[$form->id] = $form->title;
        endforeach;
    }

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'form_meta',
        'title'         => __( 'Form Select', 'cmb2' ),
        'object_types'  => array( 'jobs', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );


    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Pick a Form', 'cmb2' ),
        //'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'form_dropdown',
        'type'       => 'select',
        'options'    => $options,
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );
    // Add other metaboxes as needed

}
