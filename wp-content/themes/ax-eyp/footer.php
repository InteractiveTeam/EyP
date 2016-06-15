        <footer>
               <div class="ax-footer">
                    <div class="ax-center">
                      <div class="ax-cont-first col span_12_of_12">
                           <div class="ax-footer-logo col span_3_of_12">
                                <div class="ax-logo">
                                       <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                                </div>
                            </div>
                            <div class="ax-nav col span_9_of_12">
                                <nav>
                                   <ul>
                                       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                                   </ul>
                               </nav>
                            </div>
                        </div>
                        <div class="ax-location">
                            <p class="ax-contat-us"><?php
                                $the_query = new WP_Query( array(
                                    'post_type' => 'Creditos',
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
                                ?></p>
                           <div class="ax-social">
                               <?php dynamic_sidebar("redes sociales"); ?> 
                           </div>
                        </div>
                        <div class="ax-credits">
                            <p><?php
                                $the_query = new WP_Query( array(
                                    'post_type' => 'Creditos',
                                    'order' => 'DESC',
                                    'posts_per_page' => 1,
                                ) );

                                    if ( $the_query->have_posts() ) {
                                        while ( $the_query->have_posts() ) { ?>
                                        <?php $the_query->the_post(); ?>
                                            <?php the_content() ?>
                                        <?php }
                                    }
                                    wp_reset_postdata();
                                ?></p>
                            <?php wp_nav_menu( array( 'theme_location' => 'extra-menu')); ?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <?php wp_footer(); ?>
    </body>
</html>