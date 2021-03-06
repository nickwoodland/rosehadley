<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php global $wp_query; ?>
<div id="page-full-width" role="main">
	<article class="main-content">

	<div class="row">
		<div class="columns small-12">
			<h1 class="archive-title"><?php single_term_title(); ?> JOBS LONDON</h1>
            <?php echo term_description(); ?>
		</div>
	</div>

	<?php if ( have_posts() ) : ?>

		<div class="row large-unstack align-center" data-equalizer>

			<?php $count = 0; ?>
			<?php $total_count = $wp_query->post_count; ?>
			<?php $i = 0; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php $i ++; ?>

				<div class="columns large-4 <?php echo($i == $total_count ? 'end' : ''); ?>">
	                <?php include(locate_template('parts/job-listing.php')); ?>
	            </div>

				<?php $count ++; ?>

				<?php if($i == 6): ?>
					<?php $i = 0; ?>
				<?php endif; ?>

				<?php if($count%3==0 && $count != $total_count): ?>
					</div>
					<div class="row" data-equalizer>
				<?php endif; ?>

			<?php endwhile; ?>

		</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>
	<?php // get_sidebar(); ?>

</div>

<?php get_footer(); ?>
