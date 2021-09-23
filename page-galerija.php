<?php

/*
Template name: O nama
*/

?>


<?php get_header(); ?>


<header class="headers">
    <div class="container">
        <h3 class="text-white animate__animated animate__slideInRight">Galerija</h3>
    </div>
</header>




<section class="galerija container text-dark my-5">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
</section>


<?php get_footer(); ?>