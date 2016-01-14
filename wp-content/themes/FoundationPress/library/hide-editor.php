<?php
/**
 * Hide editor on specific pages.
 * Many pages require a 2col layout.
 * Hiding default editor in favour of 2 column editor CMBs
 */
add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
    global $pagenow;
    if( !( 'post.php' == $pagenow ) ) return;

    global $post;
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;



    $fp = get_page_by_path( 'front-page' )->ID;

    $hide_editor_pages = array(
        $fp
    );


    // Hide the editor on the pages that match with our 'hide_editor_pages' array

    foreach($hide_editor_pages as $p_id):
        if($p_id == $post_id){
            remove_post_type_support('page', 'editor');
        }
    endforeach;
}
