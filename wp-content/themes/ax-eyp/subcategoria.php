<?php
/*
Template Name: Sub categorias
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
   <div class="ax-slide-subhome">
       <div class="ax-line-banner base-color-<?php $dataPost = get_post_complete(get_the_ID()); echo $dataPost['serviciodenegocio']; ?>"></div>
        <div class="ax-content-slide-subhome">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section>
   <div class="ax-section ax-container ax-cont-sub">
        <div class="ax-center">
        <article>
            <div class="ax-title-destacado">
               <?php $dataPost = get_post_complete(get_the_ID()); echo $dataPost['destacado']; ?>
            </div>
        </article>
        <article>
            <div class="ax-content col span_4_of_12">
                    <?php $dataPost = get_post_complete(get_the_ID()); ?>
                    <?php echo $dataPost['contenedorprincipal']; ?>
            </div>
            <div class="col span_8_of_12">
                <div class="ax-content-imagen-sub-home">
                     <?php 
                       while ( have_posts() ) : the_post();

                       if( class_exists('Dynamic_Featured_Image') ) {
                           global $dynamic_featured_image;
                           $featured_images = $dynamic_featured_image->get_featured_images();
                           for($i = 0; $i < count($featured_images); $i++) {
                          ?>
                             <div class="ax-imagen-sub-home ax-imagen-sub-<?php echo $i+1; ?>">
                                 <img src="<?php echo $featured_images[$i]['full']; ?>" />
                             </div>
                          <?php
                           }
                           //You can now loop through the image to display them as required
                       }
                       endwhile;
                    ?>
                </div>
            </div>
        </article>   
        </div>
    </div>
</section>
            
<?php get_footer(); ?>
