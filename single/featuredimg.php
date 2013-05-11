<?php
    
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');

?><article class="thumbnail">
    <h2 class="post-title">
    <?php the_title(); ?>
    </h2>

    <div style="background-image:url('<?php echo $large_image_url[0]; ?>');">
    </div>

    <div style="content">
        <?php the_content(); ?>
    </div>
</article>