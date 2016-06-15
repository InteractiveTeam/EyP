<?php get_header(); ?>

<section>
   <div class="ax-section ax-slide-home">
        <div class="ax-content-slide-home">
           <?php echo do_shortcode("[metaslider id=50]"); ?>
        </div>
    </div>
</section>
<section>
   <div class="ax-section ax-service">
       <article>
            <div class="ax-center">
               <ul>
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'Menu principal',
                        'order' => 'ASC',
                        'posts_per_page' => 1,
                    ) );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) { ?>
                                <?php $the_query->the_post(); ?>
                                <?php the_content() ?>
                            <?php }
                        }
                        wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </article>
    </div>
</section>
<section>
   <div class="ax-section ax-products">
       <article>
            <div class="ax-center">
                <div class="col span_4_of_12 ax-text-description">
                   <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'Nuevos productos',
                        'order' => 'ASC',
                        'posts_per_page' => 1,
                    ) );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) { ?>
                                <?php $the_query->the_post(); ?>
                                    <hgroup>
                                        <h1><?php the_title(); ?></h1>
                                    </hgroup>
                                    <p><?php the_content() ?></p>
                            <?php }
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                
                <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'Nuevos productos',
                        'order' => 'DESC',
                        'posts_per_page' => 2,
                        
                    ) );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) { ?>
                                <?php $the_query->the_post(); ?>
                                    <div class="col span_3_of_12 ax-products-item">
                                        <?php if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'image-products_thumbs' ); 
                                        } ?>
                                        <div class="col span_6_of_12">
                                            <hgroup>
                                            <h3><?php the_title(); ?></h3>
                                            </hgroup>
                                            <span class="ax-referent">
                                            <?php $dataPost = get_post_complete(get_the_ID()); ?>
                                            <?php echo $dataPost['referencia']; ?>
                                            </span>
                                            <p class="ax-description"><?php the_content() ?></p>
                                        </div>
                                    </div>
                            <?php }
                        }
                        wp_reset_postdata();
                    ?>   
            </div>
        </article>
    </div>
</section>
<section>
   <div class="ax-section ax-statistics" data-type="parallax_section" data-speed="10">
        <article>
            <div class="ax-center">
                <div class="col span_6_of_12 ax-text-statistics">
                    <?php
                    $the_query = new WP_Query( array(
                        'post_type' => 'Estadisticas',
                        'order' => 'ASC',
                        'posts_per_page' => 1,
                    ) );

                        if ( $the_query->have_posts() ) {
                            while ( $the_query->have_posts() ) { ?>
                            <?php $the_query->the_post(); ?>
                                <hgroup>
                                    <h2><?php the_title(); ?></h2>
                                </hgroup>
                            <?php }
                        }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="col span_6_of_12">
                    <div class="ax-content-text-figure">
                           <?php
                            $the_query = new WP_Query( array(
                                'post_type' => 'Estadisticas',
                                'order' => 'DESC',
                                'posts_per_page' => 3,
                            ) );
                                $c = 1;
                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) { ?>
                                    <?php $the_query->the_post(); ?>
                                        <div class="ax-text-figure">
                                           <?php if ( has_post_thumbnail() ) { 
                                            the_post_thumbnail( 'image-stadistics_thumbs' ); 
                                            } ?>
                                            <span class="ax-result-figure item-<?php echo $c; ?>"><?php the_title(); ?></span>
                                            <p><?php the_content() ?></p>
                                        </div>
                                    <?php 
                                        $c++;
                                    }
                                }
                                wp_reset_postdata();
                            ?>                          
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<section>
   <div class="ax-section ax-your-brands">
        <article>
            <div class="ax-center">
                <div class="ax-brands">
                    <hgroup>
                        <h1>nuestras marcas</h1> 
                    </hgroup>
                    <p>Morbi quis mollis velit. Duis in sem cursus, placerat sapien eu, fermentum enim.</p>
                    <div class="ax-cont-brand">
                        <div class="ax-brand">
                            <?php echo do_shortcode("[metaslider id=94]"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
<?php get_footer(); ?>