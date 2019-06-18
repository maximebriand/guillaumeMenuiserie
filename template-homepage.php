<?php
/* Template Name: Homepage */
get_header(); ?>

<section class="slider-item overlay" data-stellar-background-ratio="0.5" style="background-image: url(<?= get_field('image_accueil'); ?>);">
    <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-9 text-center col-sm-12 element-animate">
                <h1 class="mb-4"><?= bloginfo('description'); ?></h1>
                <!-- <div class="btn-play-wrap mx-auto">
                        <p class="mb-4"><a href="https://www.youtube.com/watch?v=_VnYSoMI-9Q" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p>
                    </div>
                    <span>Watch Video</span> -->
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-5">
                <span class="d-block text-uppercase text-secondary">Qui je suis</span>
                <span class="divider my-4"></span>
                <h2 class="mb-4 section-title"><?php single_post_title(); ?></h2>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php $services = get_field('services'); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php the_content(); ?>
                            <?php comments_template('', true); ?>
                            <br class="clear">
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <article>
                        <h2><?php _e('Site en cours de construction.', 'html5blank'); ?></h2>
                    </article>
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <figure class="img-dotted-bg">
                    <img src="<?= the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
                </figure>
            </div>
        </div>
    </div>
</section>


<div class="section portfolio-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4 section-title">Les derniers chantiers</h2>
            </div>
        </div>
        <div id="masonry">
            <?php $loop = new WP_Query(array('post_type' => 'projet', 'posts_per_page' => 4, 'paged' => $paged)); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="grid-item">
                    <a href="<?= get_permalink(); ?>" title="<?= the_title_attribute('echo=0') ?>" rel="bookmark" class="work-thumb">
                        <div class="work-text">
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                        </div>
                        <?php echo the_post_thumbnail();  ?>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <p><a href="mes-chantiers" class="btn btn-outline-white px-4 py-3">Voir tous mes projets</a></p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-3">
                <span class="d-block text-uppercase text-secondary">Mes Services</span>
                <span class="divider my-4"></span>
                <h2 class="mb-4 section-title">Les <strong>Services</strong> Que Je Peux Vous Fournir</h2>
            </div>

            <div class="col-lg-6">
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="service">
                            <span class="icon icon-shield mb-4 d-block"></span>
                            <h3><?= $services['titre']; ?></h3>
                            <?= $services['contenu']; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="service">
                            <span class="icon icon-screen-desktop mb-4 d-block"></span>
                            <h3><?= $services['titre3']; ?></h3>
                            <?= $services['contenu3']; ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="service">
                            <span class="icon icon-screen-smartphone mb-4 d-block"></span>
                            <h3><?= $services['titre3']; ?></h3>
                            <?= $services['contenu3']; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="service">
                            <span class="icon icon-rocket mb-4 d-block"></span>
                            <h3><?= $services['titre4']; ?></h3>
                            <?= $services['contenu4']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section bg-light block-11">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-4 section-title">Ce que mes clients disent de mon travail</h2>
            </div>
        </div>
        <div class="nonloop-block-11 owl-carousel">
            <?php $loop = new WP_Query(array('post_type' => 'temoignage', 'posts_per_page' => 4, 'paged' => $paged)); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="item">
                    <div class="block-33 h-100">
                        <div class="vcard d-flex mb-3">
                            <div class="name-text align-self-center">
                                <h2 class="heading"><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="text">
                            <blockquote>
                                <?php the_content(); ?>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>


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