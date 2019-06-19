<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>


		<div class="inner-page">
			<div class="slider-item overlay" style="background-image: url('<?=get_template_directory_uri() ;?>/images/menuisier.jpg');" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row slider-text align-items-center justify-content-center">
						<div class="col-lg-9 text-center col-sm-12 element-animate">
							<h1 class="mb-4"><?php _e('Mes réalisations', 'html5blank'); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section portfolio-section">
			<div class="container">
				<div id="masonry">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<a href="<?php the_permalink(); ?>" class="work-thumb grid-item">
								<div class="work-text">
									<h2><?php the_title(); ?></h2>
									<!-- <p>Category Here</p> -->
								</div>
								<img src="<?= the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
							</a>
						<?php endwhile; ?>
					<?php else : ?>

						<!-- article -->
						<article>
							<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>
			</div>
		</div>


		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>