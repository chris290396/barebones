<?php

    /**
     * Template Name: Frontpage
     */

    get_header();

?>
<main class="main" role="main">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="row flex">
                <div class="col col--xs-12 col--sm-12 col--md-8 col--lg-8">
                    <div class="content <?php the_field('colour'); ?>">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col col--xs-12 col--sm-12 col--md-4 col--lg-4">
                    
                <?php
                $review_group = get_field('anmeldelse_group');
                if( $review_group ): ?>
                    <div class="review_box">
                        <div class="review">
                            <?php echo $review_group['anmeldelse']; ?>
                            <?php echo $review_group['anmelder_navn']; ?>
                        </div>
                    </div>
                <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
