<?php get_header(); ?>
<div class="col-6 border">

	<h2><?php the_title(); ?></h2> <!-- Le Titre du post-->

	<div>
		<span class="date"><?php the_date(); ?></span> <!-- La Date -->
		
		<?php
		the_tags(
			'<span class="tag"><i class="fa fa-tag"></i> ', // Début
			'</span><span class="tag"><i class="fa fa-tag"></i> ', // Entre 2 tags
			'</span>' // Fin
		);
		?>
	</div>

	<?php
	the_post_thumbnail('medium'); // La miniature du post	
	the_content(); // Le contenu 
	?>

	<a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a>

	<?php
	comments_template();  // Appeller comments.php 
	?>

</div>
<?php get_footer(); ?>