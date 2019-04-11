<?php
/* Template Name: Homepage */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                    <div class="container">
                        <br><br>
                        <h1 class="header center red-text text-darken-4"><?php the_title(); ?></h1>
                        <div class="row center">
                            <h5 class="header col s12 light"><?php bloginfo('description'); ?></h5>
                        </div>
                        <div class="row center">
                            <a href="#"  class="btn-large waves-effect waves-light red darken-4">Demander un devis</a>
                        </div>
                        <br><br>

                    </div>
                </div>
                <div class="parallax"><img src="<?php echo get_field('image_accueil');?>" alt="Unsplashed background img 1" style="transform: translate3d(-50%, 274.061px, 0px); opacity: 1;"></div>
            </div>

            <div class="container">
                <div class="section">

                    <?php $services = get_field('services');?>
                    <!--   Icon Section   -->
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center red-text text-darken-4"><i class="material-icons"><?php echo $services['image']; ?></i></h2>
                                <h5 class="center"><?= $services['titre']; ?></h5>

                                <p class="light"><?= $services['contenu']; ?></p>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center red-text text-darken-4"><i class="material-icons"><?php echo $services['image2']; ?></i></h2>
                                <h5 class="center"><?= $services['titre2']; ?></h5>

                                <p class="light"><?= $services['contenu2']; ?></p>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="icon-block">
                                <h2 class="center red-text text-darken-4"><i class="material-icons"><?php echo $services['image3']; ?></i></h2>
                                <h5 class="center"><?= $services['titre2']; ?></h5>

                                <p class="light"><?= $services['contenu2']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- A PROPOS -->
            <div class="parallax-container valign-wrapper">
                <div class="section no-pad-bot">
                    <div class="container">
                        <div class="row center">
                            <h3 class="header col s12 light">A propos</h3>
                        </div>
                    </div>
                </div>
                <div class="parallax"><img src="<?php echo get_field('seconde_image_accueil');?>" alt="Unsplashed background img 1" style="transform: translate3d(-50%, 274.061px, 0px); opacity: 1;"></div>
            </div>

            <div class="container">
                <div class="section">

                    <div class="row">
                        <div class="col s12 center">
                            <h3><i class="mdi-content-send brown-text"></i></h3>
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                    <?php the_content(); ?>

                                    <?php comments_template( '', true ); // Remove if you don't want comments ?>

                                    <br class="clear">

                                </article>
                                <!-- /article -->

                            <?php endwhile; ?>

                            <?php else: ?>

                                <!-- article -->
                                <article>

                                    <h2><?php _e( 'Site en cours de construction.', 'html5blank' ); ?></h2>

                                </article>
                                <!-- /article -->

                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>
            <!-- FIN A PROPOS-->

            <!-- Nos dernières réal -->
            <div class="parallax-container valign-wrapper">
                <div class="section no-pad-bot">
                    <div class="container">
                        <div class="row center">
                            <h3 class="header col s12 light">Les derniers chantiers</h3>
                        </div>
                    </div>
                </div>
                <div class="parallax"><img src="<?php echo get_field('image_accueil3');?>" alt="Unsplashed background img 1" style="transform: translate3d(-50%, 274.061px, 0px); opacity: 1;"></div>
            </div>
            <div class="container">
                <div class="section">

                    <div class="row">
                        <div class="col s12 center">
                            <h3><i class="mdi-content-send brown-text"></i></h3>
                            <p> ah que coucou</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- FIN A PROPOS-->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
