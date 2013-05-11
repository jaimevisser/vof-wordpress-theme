<?php get_header();
    
    ?>
    <main class="posts" role="main"><?php

    if (have_posts()){
        while(have_posts()){
            the_post();
            get_template_part("posts/thumbnail");
        }
    }
    
    ?></main><?php
    get_sidebar();
    ?><?php
    get_footer();
?>