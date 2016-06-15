<?php get_header(); ?>
<section>
    <div class="ax-section ax-breadcrumbs">
        <div class="ax-center">
            <?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
        </div>
    </div>
</section>
<section>
   <div class="ax-section ax-container">
        <div class="ax-center">
            <article>
                <div class="ax-content-search col span_12_of_12">
					<h1>Resultados de la búsqueda de "<?php echo esc_html( get_search_query( false ) ); ?>"</h1>
						 <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <div class="resultSearch">
					  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					  <?php echo strip_tags(the_content(), 0, 360) ?>
                       <p>
                        <?php $dataPost = get_post_complete(get_the_ID()); ?>
                        <?php echo strip_tags(substr($dataPost['contenedorprincipal'], 0, 360), "<p>")."...";?>
                      </p>
					 <small class="textDate">Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?>  </small>
						<?php the_excerpt(); ?>
                </div>
				 <?php endwhile; ?>
				<?php if (function_exists("pagination")) {
					pagination($additional_loop->max_num_pages);
				} ?>
				<?php  else: ?>
				<div class="entry"><?php _e('Lo sentimos, no hay resultados con este término de búsqueda.'); ?></div>
				<?php endif; ?>
                </div>
            </article>   
        </div>
    </div>
</section>
<?php get_footer(); ?>