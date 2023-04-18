<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

    <title> <?php wp_title(); ?></title>
	<link href="<?php echo get_stylesheet_uri(); ?>" >

    <?php wp_head(); ?>


</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
					<a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">
                           <div> <?php get_search_form() ;?> </div> 
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

        <div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

                    <!-- 
                        Kolla på alternativ meny
                    -->
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items' => '<ul id="" class="menu">%3$s</ul>'
                            )
                        );
                    ?>

					</div>
				</div>
			</div>
		</nav>
