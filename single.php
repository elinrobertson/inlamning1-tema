<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" />
                            <h1 class="title"><?php the_title(''); ?></h1>
								<ul class="meta">
									<li>
                                    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
									</li>
									<li>
                                    <i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
									</li>
									<li>
                                    <i class="fa fa-tag"></i> <a href="<?php the_permalink(); ?>"><?php the_category(", "); ?></a>
									</li>
								</ul>
                                <p><?php the_content(); ?></p>
                            </article>
						</div>

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