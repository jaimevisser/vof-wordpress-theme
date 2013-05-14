<?php
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
?><article class="thumbnail">
	<a style="background-image:url('<?php echo $large_image_url[0]; ?>');" href="<?php the_permalink(); ?>"><h2
			class="post-title">
			<?php the_title(); ?>
		</h2>
	</a>
</article>