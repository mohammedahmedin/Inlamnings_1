<?php

get_header();


?>



	


		<main>
			<section>
				<div class="container">
				<h1>Sökresultat</h1>	
					
				</div>
			</section>
            <?php
        if ( have_posts() ) :
        while ( have_post() ) : the_post();
        the_title();

        endwhile ;
        else :
            _e( 'sorry, no post matched your criteria.' , 'textdomain');
            endif; 

            ?>

		</main>

	

	<script src="js/script.js"></script>
<?php get_footer(); ?>
