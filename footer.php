<div class="col-xl-3 border">
	<?php
	dynamic_sidebar('sidebar-1')
	?>
</div>
</div>
</div>
</main>

<footer class="container">
	<div class="row">
		<div class="col-4 border">
			<?php
			dynamic_sidebar('footerbar-1')
			?>
		</div>
		<div class="col-4 border">FOOTER 2</div>
		<div class="col-4 border">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'footer',
					'menu_class'      => 'social-icons',
					'theme_location' => 'footer',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
				)
			);
			?>
		</div>
	</div>
</footer>

<!-- Javascript-->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>