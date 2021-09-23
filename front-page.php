<?php get_header(); ?>
          <!-- header -->
          <header class="mainHeader text-white">
            <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                  <h1 class="animate__animated animate__slideInDown animate__slow	1s"><?php the_field('glavni_naslov'); ?></h1>
                  <p class="lead animate__animated animate__slideInUp animate__slow	1s mb-4">Učite kroz konkretne, praktične primere kao i prave sajtove za klijente. <br> Pratite uživo, a posle možete da se podsetite kroz snimke koje dobijate posle radionice.</p>
                  <a href="radionice.php" class="button">Radionice &nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
                <div class="col-md-6">
                  <img src="<?php the_field('slika_header'); ?>"
                </div>
              </div>
            </div>
          </header>

          <!-- main -->
          <section class="main text-dark">
            <h2 class="text-center">Prve koderske radionice uživo u regionu</h2>
            <h5 class="text-center pb-4">Kodiramo zajedno projekte</h5>
            <div class="container">
              <div class="row">
                <div class="col-md-4 mb-5">
                  <div class="card shadow-lg">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="card-title">PRAKTIČNI PRIMERI</h5>
                    <p class="card-text">Kodiramo sa vama zajedno uživo konkretne projekte</p>
                  </div>
                </div>

                <div class="col-md-4 mb-5">
                  <div class="card shadow-lg">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="card-title">OBLASTI</h5>
                    <p class="card-text">Teme su HTML, CSS, JS i PHP, pripadajući framework-ci i preprocesori. Spajamo tehnologije iz veb dizajna i programiranja</p>
                  </div>
                </div>

                <div class="col-md-4 mb-5">
                  <div class="card shadow-lg">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="card-title">CILJEVI RADIONICA</h5>
                    <p class="card-text">Samostalnost u kodiranju, bolje razumevanje samo tehnologije</p>
                  </div>
                </div>

                <div class="col-md-4 mb-5">
                  <div class="card shadow-lg">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="card-title">UŽIVO I ONLINE</h5>
                    <p class="card-text">Pored kodiranja uživo sa predavačem, dobija se i snimak radionice</p>
                  </div>
                </div>

                <div class="col-md-4 mb-5">
                  <div class="card shadow-lg">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="card-title">VREMENSKO TRAJANJE</h5>
                    <p class="card-text">Jednodnevne, dvodevne i jednomesečne</p>
                  </div>
                </div>

                <div class="col-md-4 mb-5">
                  <div class="card shadow-lg">
                    <i class="fas fa-laptop-code"></i>
                    <h5 class="card-title">GODIŠNJE KARTE</h5>
                    <p class="card-text">Oni koji kupe godišnji paket imaju mentorski program u toku cele godine.</p>
                  </div>
                </div>
                <div class="col-md-4 offset-4 mb-5">
                <a href="radionice.php" class="button">Radionice</a>
                 <a href="onama.php" class="dugme">O nama</a>
                </div>
              </div>

              <hr class="mb-5">
            </div>
          </section>


          <!-- o nama -->
          <section class="onama container text-dark my-5">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <h3>NAJVAŽNIJA PRAKSA I ISKUSTVO</h3>
                <p>Svako ko je učio da kodira, bilo samostalno ili u nekoj školi, zna da je jedno učenje a drugo praktično primeniti znanje na konkretnim primerima. <br><br>Znanje postane upotrebljivo tek onda kad se primeni na realnim projektima.</p>
                <h3>AKO SE PITATE ZAŠTO BAŠ DA SA NAMA UČITE I VEŽBATE</h3>
                <p>Zato što se dugo za ovo spremamo. Sada znamo da možemo.<br><br>Sve o nama možete pogledati OVDE. <br><br>I najvažnije, najsvežije utiske naših polaznika koji su sada na našim online kursevima OVDE.</p>
              </div>
              <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(  ); ?>/img/onama.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </section>

             <!-- snimci -->
             <section class="snimci mb-5 text-white">
              <div class="container">
                <div class="row">
                  <div class="col-md-5">

                    <div class="card">
                      <h4 class="glavniNaslov">Snimci radionica</h4>
                      <div class="card-body p-4">
                        <h5 class="card-title text-dark pb-3">Besplatan sadržaj</h5>
                        <p class="card-text text-dark pb-3">Za sve one koji žele da se oprobaju i uče sa nama, imate snimke radionica i promotivne periode plaćenih.</p>
                        <a href="#" class="button">POSETITE STRANICU &nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
                        <p class="text-dark mt-4 mb-1">*&nbsp; Pridružite nam se</p>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                      <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad molestias atque nisi nostrum et rem deleniti odio, animi perferendis at neque voluptatibus repellendus reiciendis maxime possimus nam dignissimos. Eius, consequatur.</p>
                        <small>Andreja Markovic</small>
                    </div>

                    <div class="item">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad molestias atque nisi nostrum et rem deleniti odio, animi perferendis at neque voluptatibus repellendus reiciendis maxime possimus nam dignissimos. Eius, consequatur.</p>
                      <small>Ivan Bulatovic</small>
                  </div>

                  <div class="item">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad molestias atque nisi nostrum et rem deleniti odio, animi perferendis at neque voluptatibus repellendus reiciendis maxime possimus nam dignissimos. Eius, consequatur.</p>
                    <small>Dusica Eric</small>
                </div>
                  </div>
                  </div>
                </div>
              </div>
            </section>



          <!-- kalendar -->

          <section class="kalendar container text-dark">
            <h2 class="text-center">Kalendar radionica</h2>
            <div class="row">

            <?php 
// the query
$the_query = new WP_Query(array(

    'post_type' => 'radionice'
)); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-md-4 position-relative mb-3">
            <a href="<?php the_permalink(); ?>">
                <div class="featured-image shadow-lg">
                <?php the_post_thumbnail(); ?>
              </div>
              </a>
              <h3 class="pt-3"><?php the_title(); ?></h3>
              <div class="meta position-absolute"> Admin | <?php echo get_the_date('d.m.Y.'); ?></div>
            </div>

            <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            

            <!-- <a href="radionica2.php">
              <div class="col-md-4 position-relative mb-3">
                <div class="featuredImage shadow-lg">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/izazov.png" alt="" class="img-fluid">
                </div>
            </a>
              <h3 class="pt-3">Letnji izazov</h3>
              <div class="meta position-absolute">Admin | 23. avgusta 2021.</div>
            </div>

            <a href="radionica3.php">
              <div class="col-md-4 position-relative mb-3">
                <div class="featuredImage shadow-lg">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/prakticni veb dizajn.jpg" alt="" class="img-fluid">
                </div>
            </a>
    
              <h3 class="pt-3">Praktični veb dizajn</h3>
              <div class="meta position-absolute">Admin | 25. avgusta 2020.</div>
            </div>

            <a href="radionica3.php">
              <div class="col-md-4 position-relative mb-3">
                <div class="featuredImage shadow-lg">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/javascript.jpg" alt="" class="img-fluid">
                </div>
            </a>
          
              <h3 class="pt-3">30 dana kodiranja sa osnovama Javascript-a</h3>
              <div class="meta position-absolute"> Admin | 23. avgusta 2020.</div>
            </div> -->
          </div>
          </section>

       



          <?php get_footer(); ?>