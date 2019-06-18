<?php get_header(); ?>

<div class="inner-page">
	<div class="slider-item overlay" style="background-image: url(<?= the_post_thumbnail_url(); ?>);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row slider-text align-items-center justify-content-center">
				<div class="col-lg-9 text-center col-sm-12 element-animate">
					<h1 class="mb-4"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="section">
				<div class="container">

					<?php the_content(); ?>

					<?php comments_template('', true);
					?>

					<br class="clear">

					<?php edit_post_link(); ?>
				</div>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>

		<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->
</main>


<?php get_footer(); ?>