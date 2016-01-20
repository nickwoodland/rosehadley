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

<?php include(locate_template('parts/banner.php')); ?>

<?php $lcol = get_post_meta($post->ID, '_rh_page_col_1', true); ?>
<?php $rcol = get_post_meta($post->ID, '_rh_page_col_2', true); ?>

<div id="page-full-width" role="main">
	<article class="main-content">

		<?php if(the_content()): ?>

			<div class="row">
				<?php the_content(); ?>
			</div>

		<?php endif; ?>

		<div class="row">

			<?php if($rcol && $lcol): ?>

				<div class="columns medium-6">
					<?php echo apply_filters('the_content', $lcol ); ?>
				</div>

				<div class="columns medium-6">
					<?php echo apply_filters('the_content', $rcol ); ?>
				</div>

			<?php elseif($rcol || $lcol): ?>

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

	</article>
</div>

<?php get_footer(); ?>
