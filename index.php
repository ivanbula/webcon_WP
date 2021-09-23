<?php get_header(); ?>

<header class="headers">
    <div class="container">
        <h3 class="text-white animate__animated animate__slideInRight">Blog</h3>
    </div>
</header>

<!-- blog -->

        <section class="blog container text-dark my-5">
            <div class="row">


            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <div class="col-md-6 position-relative mb-5">
                <a href="<?php the_permalink(); ?>">
                <div class="featured-image shadow-lg">
                <?php the_post_thumbnail(); ?>
              </div>
              </a>
              <h3><?php the_title(); ?></h3>
              <div class="meta position-absolute"> Admin | <?php echo get_the_date('d.m.Y.'); ?></div>
            </div>

            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

          </div>
          </section>



          <?php get_footer(); ?>