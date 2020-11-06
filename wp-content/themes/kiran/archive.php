
    <?php get_header(); ?>

    <div class="container pt-5 pb-5">

        <h1><?php echo single_cat_title(); ?></h1>

    </div>



    <div class="container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="card mb-4">

                <div class="card-body">

                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>


                    <div class="blog-div">
                        <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
                    </div>

                    <div class="blog-div">
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        <?php endwhile; endif; ?>

    </div>

    <?php get_footer(); ?>
