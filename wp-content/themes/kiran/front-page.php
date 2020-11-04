
<?php get_header(); ?>

    <div class="container pt-5 pb-5">

        <h1><?php echo the_title(); ?></h1>

    </div>

<?php

    if(have_posts())
    {
        // Loop through posts
        while(have_posts())
        {
            // Iterate on to next post
            the_post();

            // Store content
            $content = the_content();

            // Output content
            echo $content;
        }
    }

?>

<?php get_footer(); ?>
