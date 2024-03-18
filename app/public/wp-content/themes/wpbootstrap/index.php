<?php get_header(); ?>


<div class="full-screen2">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="title">Welcome to Your Website</h1>
        <p class="text-secondary">Learn more about us and our services.</p>
    </div>
</div>

<!-- Index -->

<div class="container-fluid p-5">
    <div class="row align-items-center justify-content-start">
        <div class="entry-content">
            <div class="entry-content">

                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="blog-post">

                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <!-- <h2 class="blog-title"><?php the_title(); ?></h2>
            <p class="blog-date"><?php the_date(); ?></p> -->
                                    <p class="blog-description "><?php the_content(); ?> </p>

                                <?php endwhile; ?>
                            <?php else : ?>
                                <p><?php __('No Posts Found'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>