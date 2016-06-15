<?php
/*
Template Name: Sub home
*/
?>
<?php get_header(); ?>
<section>
    <div class="ax-section ax-breadcrumbs">
        <div class="ax-center">
            <?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
        </div>
    </div>
</section>
                                    
<section>
   <div class="ax-slide-category">
        <div class="ax-content-slide-category">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<section>
    <div class="ax-section ax-title-category ax-category-<?php $dataPost = get_post_complete(get_the_ID()); echo $dataPost['serviciodenegocio']; ?>">
        <div class="ax-center">
            <div class="ax-title">
                <h1><span class="ax-icon-category ax-icon-1"></span><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Contenido del post -->
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<section>
   <div class="ax-section ax-container ax-cont-<?php $dataPost = get_post_complete(get_the_ID()); echo $dataPost['serviciodenegocio']; ?>">
        <div class="ax-center">
            <article>
                <div class="ax-content col span_12_of_12">
                    <hgroup>
                        <h2><?php the_title(); ?></h2>
                    </hgroup>
                    <?php $dataPost = get_post_complete(get_the_ID()); ?>
                    <?php echo $dataPost['contenedorprincipal']; ?>
                </div>
            </article>
        </div>
    </div>
</section>
<?php endwhile; else: ?>
<p><?php _e('No hay entradas .'); ?></p>
<?php endif; ?>
            
<?php get_footer(); ?>
