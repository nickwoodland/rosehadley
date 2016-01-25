<?php
function banner_interchange_string($post_id){

    if($post_id == '' || !has_post_thumbnail($post_id)):
        return;
    endif;

    $feature_img_id = get_post_thumbnail_id($post_id);
    $size_array = array('medium' => 'small','medium-large' => 'medium','large' => 'large');

    $return_string = '';
    $flag = true;

    foreach($size_array as $img_size => $breakpoint):

        $url = '';
        $url = wp_get_attachment_image_src($feature_img_id, $img_size);

        if($url != false):

            if($flag == true):
                $return_string = '['.$url[0].', (default)]';
            endif;

            $return_string .= ',['.$url[0].', '.$breakpoint.']';

            $flag = false;

        endif;

    endforeach;

    return $return_string;
}
