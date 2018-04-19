<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

			<section id="primary" class="content-area col-sm-12 col-lg-12">
				<main id="main" class="site-main" role="main">
				<div class="row">
					<div class="col-12 col-md-8">
						<h1> <u> <?php the_field('nom du plat'); ?> </u> </h1>
												
						
						<?php if( get_field('photo du plat') ): ?>
								<img src="<?php the_field('photo du plat'); ?>" />
						<?php endif; ?>
								<?php the_post_navigation(); ?>

					</div>

						<div class="mt-5">
							
						<p> <h2 class="text-primary"> Liste des ingrédients </h2> <?php the_field('liste des ingrédients'); ?> </p>
						<p> <h2 class = "text-primary"> Prix </h2> <?php the_field('prix_du_plat'); ?> </p>
						<p> <h2 class = "text-primary"> Catégorie </h2> <?php the_field('categorie'); ?> </p>

						

					</div>
					

					
		
		

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

