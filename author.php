<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_author(); ?></h1>
                            <?php if( have_posts() ): while( have_posts() ): the_post();?>  <!-- Rendering the archive posts -->
							<article>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" />
								<h2 class="title">
                                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_date(); ?> 
									</li>
									<li>
                                    <i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
									</li>
									<li>
                                    <i class="fa fa-tag"></i> <a href="<?php the_permalink(); ?>"><?php the_category(", "); ?></a>
									</li>
								</ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                            <?php endwhile; else: endif;?>

				<nav class="navigation pagination">  <!-- Pagination -->
					<?php
						global $wp_query;

						$big = 9999999999999;
						echo paginate_links(
							array(
							'base' => str_replace($big, '%#%', esc_url( get_pagenum_link( $big))),
							'format' => '?paged=%#%',
							'current' => max(1, get_query_var('paged')),
							'total' => $wp_query->max_num_pages
							)
						);
						?>
				</nav>

						</div>

						 <!-- Dynamic sidebar -->
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
								<?php dynamic_sidebar('search') ?> <br>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<ul>
											<li class="page_item current_page_item">
												<?php dynamic_sidebar('sidor') ?> <br>

												<?php dynamic_sidebar('arkiv') ?> <br>
									</li>
									<li class="categories">

										<?php dynamic_sidebar('kategorier') ?> <br>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>