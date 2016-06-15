<?php get_header(); ?>

<section>
   <div class="ax-section ax-container">
        <div class="ax-center">
            <article>
                    <div class="ax-content col span_12_of_12">
                    <hgroup>
                        <h1><?php the_title(); ?></h1>
                    </hgroup>
                    <?php the_content(); ?>
                </div>
            </article>   
        </div>
    </div>
</section>

<?php get_footer(); ?>