<?php $facebook = false; ?>
<?php $twitter = false; ?>
<?php $blogger = false; ?>
<?php $google = false; ?>

<?php $facebook = of_get_option('facebook_page_url'); ?>
<?php $twitter = of_get_option('twitter_profile_url'); ?>
<?php $blogger = of_get_option('blogger_page_url'); ?>
<?php $google = of_get_option('google_company_page_url'); ?>


<?php if($facebook && "" != $facebook): ?>
    <a class="icon--social" href="<?php echo $facebook; ?>">
        <div class="icon--social__inner">
            <span>Facebook Link</span>
            <i class="fa fa-lg fa-fw fa-facebook"></i>
        </div>
    </a>
<?php endif; ?>

<?php if($twitter && "" != $twitter): ?>
    <a class="icon--social" href="<?php echo $twitter; ?>">
        <div class="icon--social__inner">
            <span>twitter Link</span>
            <i class="fa fa-lg fa-fw fa-twitter"></i>
    </div>
    </a>
<?php endif; ?>

<?php if($blogger && "" != $blogger): ?>
    <a class="icon--social" href="<?php echo $blogger; ?>">
        <div class="icon--social__inner">
            <span>blogger Link</span>
            <i class="fa fa-lg fa-fw fa-facebook"></i>
    </div>
    </a>
<?php endif; ?>

<?php if($google && "" != $google): ?>
    <a class="icon--social" href="<?php echo $google; ?>">
        <div class="icon--social__inner">
            <span>blogger Link</span>
            <i class="fa fa-lg fa-fw fa-google-plus"></i>
        </div>
    </a>
<?php endif; ?>
