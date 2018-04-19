<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

		
			<h1 class="text-center text-info"><?php the_field("titre_du_plat_du_jour");  ?></h1>
			   <div class="container ">
			<div class="row m-3">
				<div class="col">
				<h3><?php the_field('titre_entre'); ?></h3>
		    

				</div>

				<div class="col">
				
				<?php if( get_field('image_entre') ): ?>
					<img src="<?php the_field('image_entre'); ?>" />
			<?php endif; ?>
				</div>
			</div>




			<div class="row">
				<div class="col m-3">
				<?php if( get_field('image_plat_du_jour') ): ?>
			   <img src="<?php the_field('image_plat_du_jour'); ?>" />
					<?php endif; ?>

				</div>

				<div class="col m-3">
				<h3><?php the_field('titre_plat_du_jour'); ?></h3>

				</div>



				<div class="row">
				<div class="col m-3">
				<h3> <?php the_field('titre_dessert'); ?></h3>

				</div>

				<div class="col m-3">

				<?php if( get_field('image_dessert') ): ?>
								<img src="<?php the_field('image_dessert'); ?>" />
						<?php endif; ?>
				</div>

</div>
</div>

		<h1 class="text-center text-info pt-5"> <?php the_field("prix_plat_de_jour");  ?></h1>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

