<?php
    
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

?><article class="single">
    <h2 class="post-title">
    <?php the_title(); ?>
    </h2>

    <?php if(has_post_thumbnail()){ ?>
    <div class="featuredimage" style="background-image:url('<?php echo $large_image_url[0]; ?>');">
    </div>
    <?php } ?>

    <div class="content">
        <?php the_content(); ?>
    </div>
    
    <div class="clearfloat"></div>
</article>