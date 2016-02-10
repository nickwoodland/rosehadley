<?php if(has_post_thumbnail()): ?>

	<?php $banner_interchange_string = banner_interchange_string($post->ID); ?>

	<?php $banner_heading = get_post_meta($post->ID, _rh_page_banner_heading, true); ?>
	<?php $banner_subheading = get_post_meta($post->ID, _rh_page_banner_subheading, true); ?>
	<?php $banner_text = get_post_meta($post->ID, _rh_page_banner_text, true); ?>
	<?php $banner_colour = get_post_meta($post->ID, _rh_page_banner_colour, true); ?>

	<div class="banner" data-interchange="<?php echo $banner_interchange_string; ?>">

			<?php if($banner_heading || $banner_subheading || $banner_text): ?>
				<div class="banner__content <?php echo $banner_colour; ?>">
					<div>
						<?php if($banner_heading): ?>
							<h1 class="banner__heading--1"><?php echo $banner_heading; ?></h1>
						<?php endif; ?>
						<?php if($banner_subheading): ?>
							<h1 class="banner__heading--2"><?php echo $banner_subheading; ?></h1>
						<?php endif; ?>
						<?php if($banner_text): ?>
							<p class="banner__text"><?php echo $banner_text; ?></p>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
	</div>
<?php endif; ?>
