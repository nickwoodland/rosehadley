<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php $subtitle = get_post_meta($post->ID, '_rh_page_subtitle', true); ?>
<?php $lcol = get_post_meta($post->ID, '_rh_page_col_1', true); ?>
<?php $rcol = get_post_meta($post->ID, '_rh_page_col_2', true); ?>

<div id="page-full-width" role="main">

	<?php include(locate_template('parts/banner.php')); ?>

	<article class="main-content">

		<?php if($subtitle): ?>
			<div class="main-content__subtitle">
				<h2><?php echo $subtitle; ?></h2>
			</div>
		<?php endif; ?>

		<div class="main-content__columns">
            <div class="columns medium-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5993586729537!2d-0.1615898840088192!3d51.50221921890252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605390732e639%3A0x83415af6f6f2ea2f!2sRose+Marie+Hadley!5e0!3m2!1sen!2suk!4v1453994511867" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="form-wrapper columns medium-6">
                <div class="form__inner">
                    <?php gravity_form( 'Contact Form', false, false, false, null, false); ?>
                </div>
            </div>
		</div>

        <?php if($lcol || $rcol): ?>
    		<div class="main-content__columns">

    			<?php if($rcol && $lcol): ?>

    				<div class="columns medium-6">
    					<?php echo apply_filters('the_content', $lcol ); ?>
    				</div>

    				<div class="columns medium-6">
    					<?php echo apply_filters('the_content', $rcol ); ?>
    				</div>

    			<?php else: ?>

    				<?php if($rcol): ?>
    					<?php $col_content = $rcol; ?>
    				<?php else: ?>
    					<?php $col_content = $lcol; ?>
    				<?php endif; ?>

    				<div class="columns small-12">
    					<?php echo apply_filters('the_content', $col_content ); ?>
    				</div>

    			<?php endif; ?>

    		</div>
        <?php endif; ?>
	</article>
</div>

<?php get_footer(); ?>
