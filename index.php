<?php get_header();
    
    ?>
    <div id="content">
    <div id="posts" role="main"><?php

    if (have_posts()){
        while(have_posts()){
            the_post();
            get_template_part("posts/thumbnail");
        }
    }else{
    
    }
    
    ?></div><?php
    get_sidebar();
    ?></div><?php
    get_footer();
?>