<?php get_header(); ?>

<main>
     <section>
        <div class="container">
            <div class="row">
                 <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                      <?php if( have_posts() ): while( have_posts() ): the_post();?>
                     <h1><?php echo "Sökresultat för: "; the_search_query(); ?></h1>
                     <div class="searchform-wrap">
                         <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                            <div>
                            <input type="text" value="<?php echo '' ?> "name="s" id="s"/>
                            <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('Sök', 'submit button'); ?>"/>
                            </div>
                        </form> <br>

                    <article>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" />
                        <h2 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i><?php the_date();?><?php get_the_date();?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i><a href="<?php the_permalink();?>"><?php the_author_posts_link();?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <a href="<?php the_permalink();?>"> <?php the_category(', ' );?> </a>
                                </li>
                                </ul>
                            <?php the_content();?>
                    </article>
                </div>
                <?php endwhile; ?> <?php else: ?>
                <p>Inga poster hittades</p>
                <?php endif; ?>
                </div>
             </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
