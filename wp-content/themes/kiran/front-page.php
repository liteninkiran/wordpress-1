
<?php get_header(); ?>

    <div class="container pt-5 pb-5">

        <h1><?php echo the_title(); ?></h1>

    </div>

<?php

    if(have_posts())
    {
        while(have_posts())
        {
            the_post();
            echo the_content();
        }
    }

?>

    <div class="container">
        <?php include 'lorem.php'; ?>
    </div>

<?php get_footer(); ?>
