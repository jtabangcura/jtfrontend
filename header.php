<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/c8835a2a07.js" crossorigin="anonymous"></script>

	<?php wp_head() ?>

</head>

<body <?php body_class() ?>>

<div id="top"></div>

<header id="header" class="animate">
	<div class="container">

		<div id="nav-toggle" class="animate">
			<a><i class="fa-solid fa-ellipsis-vertical"></i><span>Menu</span></a>
		</div>

		<div class="d-flex align-items-stretch justify-content-between">

			<div id="logo">
				<a href="<?php bloginfo('home') ?>#top">
					<span class="big animate"><?php bloginfo('name') ?></span>
					<span><?php bloginfo('description') ?></span>
				</a>
			</div>

			<?php
				wp_nav_menu(
				  array(
				    'theme_location' => 'header-menu',
				    'container' => '',
				  )
				) ?>

		</div>

	</div>
</header>