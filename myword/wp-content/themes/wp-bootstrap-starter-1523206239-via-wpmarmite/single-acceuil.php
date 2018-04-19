<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

			<section id="primary" class="">
				<main id="main" class="site-main" role="main">
								
								<div class="justify-content-between">
									<h1> <?php the_field('titre'); ?>  </h1>
							    <?php if( get_field('image') ): ?>
									<img src="<?php the_field('image1'); ?>" />
								<?php endif; ?>				
							
									
						       </div>
									
					<div class="col mt-5">
						<h3> <strong> <?php the_field('description1'); ?> </strong> </h3>
						<p> <?php the_field('competence'); ?> </p>

					</div>
					
					<div class="col mt-5">
						<h3> <strong> <?php the_field('description-experience-professionelle'); ?> </strong> </h3>
						<p> <?php the_field('experience-professionelle'); ?> </p>

					</div>
						
					
					<div class="col mt-5">
						<h3> <strong> <?php the_field('description-competence-informatique'); ?> </strong> </h3>
						<p> <?php the_field('competence_informatique'); ?> </p>

					</div>
					
					<div class="col mt-5">
						<h3> <strong> <?php the_field('description1-langue'); ?> </strong> </h3>
						<p> <?php the_field('langue'); ?> </p>

					</div>
					
					
					<div class="col mt-5">
						<h3> <strong> <?php the_field('description-centres-dinteret'); ?> </strong> </h3>
						<p> <?php the_field('centres-dinteret'); ?> </p>

					</div>
					

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
