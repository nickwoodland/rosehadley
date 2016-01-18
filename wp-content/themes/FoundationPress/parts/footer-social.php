<?php $facebook = false; ?>
<?php $twitter = false; ?>
<?php $blogger = false; ?>

<?php $facebook = of_get_option('facebook_page_url'); ?>
<?php $twitter = of_get_option('twitter_profile_url'); ?>
<?php $blogger = of_get_option('blogger_page_url'); ?>

<?php if($facebook && "" != $facebook): ?>
    <a class="icon icon--facebook" href="<?php echo $facebook; ?>">Facebook Link</a>
<?php endif; ?>

<?php if($twitter && "" != $twitter): ?>
    <a class="icon icon--twitter" href="<?php echo $twitter; ?>">twitter Link</a>
<?php endif; ?>

<?php if($blogger && "" != $blogger): ?>
    <a class="icon icon--blogger" href="<?php echo $blogger; ?>">blogger Link</a>
<?php endif; ?>
