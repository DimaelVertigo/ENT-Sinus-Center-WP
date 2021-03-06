<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ENT & Sinus Center
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo(); ?>/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container container--light container--header">
		<div class="wrapper wrapper--padding-off">
			<header class="header">
				<a href="<?php echo home_url(); ?>" class="header__logo"></a>
				<nav class="navigation">
					<ul>
						<li class="navigation__item">
							<a href="#anchor--1" class="navigation__link navigation__link--1 anchor">benefits</a>
						</li><li class="navigation__item">
							<a href="#anchor--2" class="navigation__link navigation__link--2 anchor">how it works</a>
						</li><li class="navigation__item">
							<a href="#anchor--3" class="navigation__link navigation__link--3 anchor">testimonials</a>
						</li><li class="navigation__item">
							<a href="#anchor--4" class="navigation__link navigation__link--4 anchor">schedule appointment</a>
						</li><li class="navigation__item">
							<a href="#anchor--5" class="navigation__btn navigation__link navigation__link--5 anchor">take the test</a>
						</li>
					</ul>
				</nav>
			</header>
		</div>
	</div>
	<!-- container -->