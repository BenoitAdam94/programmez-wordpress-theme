<?php get_header(); ?>
<div class="col-6 border">


<?php get_custom_header(  ); ?>

<?php
	if (have_posts()) { // Si il y a des posts à afficher

		while (have_posts()) { // Tant qu'il y a des posts à afficher

			the_title();
			the_post(); // Articles de blogs
			the_content(); // Pages

		}
	}

	?>

</div>
<?php get_footer(); ?>