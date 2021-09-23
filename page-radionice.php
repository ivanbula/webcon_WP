
<?php
/*
Template name: Sablon za radionice
*/

?>

<?php get_header(); ?>

<header class="headers">
    <div class="container">
        <h3 class="text-white animate__animated animate__slideInRight">Radionice</h3>
    </div>
</header>


<!-- radionice -->

    <section class="radionice container text-dark my-5">
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

            <div class="col-md-6 position-relative mb-5">
                <a href="<?php the_permalink(); ?>">
                  <div class="featured-image shadow-lg">
                  <?php the_post_thumbnail(); ?>
                  </div>
                </a>
                <h3><?php the_title(); ?></h3>
                <div class="meta position-absolute"> Admin | <?php echo get_the_date('d.m.Y.'); ?></div>
            </div>


            <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            

              <!-- <div class="col-md-6 position-relative mb-5">
              <a href="radionica2.php">
                <div class="featuredImage shadow-lg">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/izazov.png" alt="" class="img-fluid">
                </div>
            </a>
              <h3>Letnji izazov</h3>
              <div class="meta position-absolute">Admin | 23. avgusta 2021.</div>
            </div>

         
              <div class="col-md-6 position-relative mb-5">
              <a href="radionica3.php">
                <div class="featuredImage shadow-lg">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/prakticni veb dizajn.jpg" alt="" class="img-fluid">
                </div>
            </a>
    
              <h3>Praktični veb dizajn</h3>
              <div class="meta position-absolute">Admin | 25. avgusta 2020.</div>
            </div>

         
              <div class="col-md-6 position-relative mb-5">
              <a href="radionica4.php">
                <div class="featuredImage shadow-lg">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/javascript.jpg" alt="" class="img-fluid">
                </div>
            </a> -->
          
              <!-- <h3>30 dana kodiranja sa osnovama Javascript-a</h3>
              <div class="meta position-absolute"> Admin | 23. avgusta 2020.</div>
            </div> -->




          </div>
          </section>


          <?php get_footer(); ?>