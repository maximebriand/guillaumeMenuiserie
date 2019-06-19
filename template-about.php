<?php
/* Template Name: A propos */
get_header(); ?>


<div class="inner-page">
    <div class="slider-item overlay" style="background-image: url(<?= the_post_thumbnail_url(); ?>);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-lg-9 text-center col-sm-12 element-animate">
                    <h1 class="mb-4"><?php single_post_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-auto mb-5">
                <span class="d-block text-uppercase text-secondary">Qui je suis</span>
                <span class="divider my-4"></span>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php $experiences = get_field('experiences'); ?>
                    <!-- experiences is define in the loop. Because if we call it outside it's returnig null -->
                <?php endwhile; ?>

            </div>
            <div class="col-lg-6">
                <figure class="img-dotted-bg">
                    <img src="<?= get_field('photo_de_moi'); ?>" alt="Image" class="img-fluid">
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center">
                <h2 class="mb-4 section-title">Mes précédentes <strong>expériences</strong></h2>
                <p class="mb-5 lead">Avant de me mettre à mon compte, j'ai acquis de l'expérience dans ces différentes
                    entreprises afin de pouvoir vous présenter un travail professionnel et de qualité.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="media d-block media-custom text-center">
                    <a href="#"><img src="<?= $experiences['logo1']; ?>" alt="Image Placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h3 class="mt-0 text-black"><?= $experiences['company_name1']; ?></h3>
                        <p><?= $experiences['company_description1']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media d-block media-custom text-center">
                    <a href="#"><img src="<?= $experiences['logo2']; ?>" alt="Image Placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h3 class="mt-0 text-black"><?= $experiences['company_name2']; ?></h3>
                        <p><?= $experiences['company_description2']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media d-block media-custom text-center">
                    <a href="#"><img src="<?= $experiences['logo3']; ?>" alt="Image Placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h3 class="mt-0 text-black"><?= $experiences['company_name3']; ?></h3>
                        <p><?= $experiences['company_description3']; ?></p>
                    </div>
                </div>
            </div>
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
<!-- END section -->
<?php get_footer(); ?>