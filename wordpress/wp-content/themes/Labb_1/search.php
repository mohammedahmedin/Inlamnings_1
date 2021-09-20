<?php

get_header();


?>



	


		<main>
			<section>
				<div class="container">
				<h1>Sökresultat</h1>	
					
				</div>
			</section>
            <!-- loop -->
            <?php
             $query = new WP_Query( 'post_type = post' );
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        the_title();

        endwhile ;
        else :
            _e( 'sorry, no post matched your criteria.' , 'textdomain');
            endif; 

            ?>

		</main>

	

	<script src="js/script.js"></script>
<?php get_footer(); ?>
