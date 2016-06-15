<?php get_header(); ?>
<?php //get_sidebar(); ?>

<h2>Historial de Artículos industriales</h2>
<?php
    $args = array('post_type' => 'generadores_industri','post_status'=>'publish');
    $posts = new WP_Query($args);
?>

<table>
   <thead>
        <tr>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Marca</th>
            <th>RPM</th>
            <th>Ver más</th>
        </tr>
    </thead>
    <tbody>
    <?php while ($posts->have_posts()) : $posts->the_post(); ?>
        <?php $dataPost = get_post_complete(get_the_ID()); ?>
        <?php //the_title(); ?>
        <tr>
            <td><?php echo $dataPost['post_content']; ?></td>
            <td><?php echo $dataPost['Referencia']; ?></td>
            <td><?php echo $dataPost['marca']; ?></td>
            <td><?php echo $dataPost['RPM']; ?></td>
            <td>
                <a href="<?php echo wp_get_attachment_url($dataPost['pdf_indus']); ?>">
                    PDF    
                </a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>

<?php get_footer(); ?>
