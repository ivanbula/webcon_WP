<?php get_header(); ?>

<header class="headers">
    <div class="container">
        <h3 class="text-white animate__animated animate__slideInRight"><?php the_title(); ?></h3>
    </div>
</header>

<!-- radionice lista -->
<section class="radionicaLista container py-5">
    <div class="row align-items-start">
        <div class="col-md-8 text-dark">
            <article class="featured-image>
                <?php the_post_thumbnail(); ?>
                <div class="meta position-absolute"> Admin | <?php echo get_the_date('d.m.Y.'); ?></div>
                <?php the_content(); ?>
                <hr>
               
            </article>
        </div>
        <div class="col-md-4 text-dark">
        <aside>

            <!-- <div class="widget1 mb-5">
                <h4 class="text-white">Poslednje sa bloga</h4>
                <p><a href="<?php the_permalink(); ?>">Da li svi mogu naučiti programiranje?</a></p>
                <p class="pb-3"><a href="<?php the_permalink(); ?>">Kako najbrže do posla u IT industriji?</a></p>
            </div> -->

            <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                <?php dynamic_sidebar('sidebar-1'); ?>
            <?php } ?>

            <!-- <div class="widget2">
                <h4 class="text-white">Mapa sajta</h4>
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Naslovna</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="o-nama.php">O nama</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="radionice.php">Radionice</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pb-3" href="#">Primer strane</a>
                    </li>
                </ul>
            </div> -->
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                <?php dynamic_sidebar('sidebar-2'); ?>
            <?php } ?>
            
        </aside>
        </div>

    </div>
</section>

<?php get_footer(); ?>