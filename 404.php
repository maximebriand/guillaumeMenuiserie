<?php get_header(); ?>
<div class="inner-page">
	<div class="slider-item overlay" style="background-image: url('<?= get_template_directory_uri(); ?>/images/menuisier.jpg');" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row slider-text align-items-center justify-content-center">
				<div class="col-lg-9 text-center col-sm-12 element-animate">
					<h1 class="mb-4"><?php _e('Page not found', 'html5blank'); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container">
		<p>Désolé la page demandée n'est pas disponible</p>
		<h2>
			<a href="<?php echo home_url(); ?>"><?php _e('Return home?', 'html5blank'); ?></a>
		</h2>


	</div>
</div>
<?php get_footer(); ?>