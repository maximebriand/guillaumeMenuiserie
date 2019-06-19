<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<?php while (have_posts()) : the_post(); ?>

		<div class="inner-page">
			<div class="slider-item overlay" style="background-image: url(<?= the_post_thumbnail_url();?>);" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row slider-text align-items-center justify-content-center">
						<div class="col-lg-9 text-center col-sm-12 element-animate">
							<h1 class="mb-4"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-6">
						<?php if (has_post_thumbnail()) :
							?>
							<?php the_post_thumbnail();
							?>
						<?php endif; ?>
					</div>
					<div class="col-lg-5 ml-auto">
						<h3 class="mb-4">Description du projet</h3>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
					</div>
					<div class="col-lg-4">
						<p><a href="/mes-projets" class="btn btn-outline-black">Voir tous les projets</a></p>
					</div>
					<div class="col-lg-4">
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</section>
</main>


	<div class="bg-primary py-5">
		<div class="container text-center">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<h3 class="text-white mb-4 font-weight-normal">Vous avez un chantier et besoin d'aide ?</h3>
					<p class="text-white mb-5">Contactez moi et je tacherais de vous répondre le plus vite possible afin de vous accompagner dans vos travaux.</p>

					<p class="mb-0"><a href="contact" class="btn btn-outline-white px-4 py-3">Me Contacter</a></p>
				</div>
			</div>

		</div>
	</div>

	<?php get_footer(); ?>