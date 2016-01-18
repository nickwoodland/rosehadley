<?php $excerpt_flag = (has_excerpt() ? true : false); ?>

<article class="job-listing">

    <div class="job-listing__title">
        <h3><?php the_title(); ?></h3>
    </div>

    <div class="job-listing__content">
        <?php if($excerpt_flag): ?>
            <?php the_excerpt(); ?>
        <?php else : ?>
            <?php the_content(); ?>
        <?php endif; ?>
    </div>

    <div class="job-listing__ctas">
        <a class="button" href="<?php the_permalink(); ?>">Apply For Job</a>

        <?php if($excerpt_flag): ?>

            <a class="button" data-open="js-modal-job-<?php echo $post->ID; ?>">More Info</a>

            <div class="reveal" id="js-modal-job-<?php echo $post->ID; ?>" data-reveal>
                <?php the_content(); ?>
              <button class="close-button" data-close aria-label="Close reveal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php endif; ?>
    </div>
</article>
