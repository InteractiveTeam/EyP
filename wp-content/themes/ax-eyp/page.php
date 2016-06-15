<?php get_header(); ?>
<section>
    <div class="ax-section ax-breadcrumbs">
        <div class="ax-center">
            <?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
        </div>
    </div>
</section>
<!-- Contenido del post -->
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
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
<?php endwhile; else: ?>
<p><?php _e('No hay entradas .'); ?></p>
<?php endif; ?>
            
<?php get_footer(); ?>
