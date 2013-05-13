<?php get_header(); ?>
<main class="single" role="main"> <?php
if (have_posts()){
	while(have_posts()){
		the_post();
		get_template_part("single/featuredimg");
	}
}
?> </main>
<?php get_footer(); ?>