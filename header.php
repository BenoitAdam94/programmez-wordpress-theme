<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css">

	<!-- Wp_Head -->
	<?php wp_head(); ?>

</head>

<body <?php body_class('programmez-background'); ?>>
	<header class="container">
		<div class="row">
			<div class="col-12 border">
				<?php the_custom_logo(); ?>

				<span class="programmez-titre"><?php bloginfo('name'); ?></span>

				<em class="programmez-description"><?php bloginfo('description'); ?></em>

			</div>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<nav class="col-3 border programmez-menu-class">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'theme_location' => 'primary',
						)
					);
					?>
				</nav>