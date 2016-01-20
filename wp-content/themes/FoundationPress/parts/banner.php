<?php if(has_post_thumbnail()): ?>

	<?php $thumb_id = get_post_thumbnail_id; ?>
	<?php $thumb_src = wp_get_attachment_image_src($thumb_id); ?>

	<?php $banner_heading = get_post_meta($post->ID, _rh_page_banner_heading, true); ?>
	<?php $banner_subheading = get_post_meta($post->ID, _rh_page_banner_subheading, true); ?>
	<?php $banner_text = get_post_meta($post->ID, _rh_page_banner_text, true); ?>

	<div class="banner-wrapper">
		<div class="banner">

		</div>

		<?php if($banner_heading || $banner_subheading || $banner_text): ?>
			<div class="banner__content">
				<?php if($banner_heading): ?>
					<h2><?php echo $banner_heading; ?></h2>
				<?php endif; ?>
				<?php if($banner_subheading): ?>
					<h3><?php echo $banner_subheading; ?></h3>
				<?php endif; ?>
				<?php if($banner_text): ?>
					<p><?php echo $banner_text; ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>