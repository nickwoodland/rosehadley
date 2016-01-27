<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php $connected_form = get_post_meta($post->ID, '_rh_jobs_form_dropdown', true); ?>

<div id="single-post" role="main">
	<div class="banner banner--jobs" data-equalizer>
		<div class="banner__flex-inner" data-equalizer-watch>
			<div class="banner__content banner--light">
				<h2>THE HAIR & BEAUTY RECRUITMENT AGENCY</h2>
				<h3>FOR HAIR JOBS & BEAUTY JOBS LONDON</h3>
			</div>
		</div>
	</div>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<header class="hide">
				<h1 class="entry-title">Application For <?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">
				<?php if($connected_form): ?>
					<div class="row collapse">
						<div class="form-wrapper form-wrapper--job columns medium-10 small-12">
							<div class="form__inner">
								<div class="form__header">
									<h3>Job Application - </h3><h4> <?php the_title(); ?></h4>
								</div>
								<?php gravity_form( $connected_form, false, false, false, null, false); ?>
							</div>
						</div>
					</div>
				<?php else: ?>
				<?php endif; ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>
