<?php get_header(); ?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
							<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">
								<?php if( have_posts() ): while( have_posts() ): the_post();?>  <!-- Rendering the post on the front page -->
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
								<?php endwhile; else: endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>



<?php get_footer(); ?>