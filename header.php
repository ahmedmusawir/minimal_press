<!DOCTYPE html>
<!-- [if IE 8]> <html lang="en" class="ie8"> <![endif] -->
<!-- [if !IE]><! -->
<html <?php language_attributes(); ?>> 
<!-- <![endif] -->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name' ); ?></title>

		<!-- Bootstrap CSS -->
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic' rel='stylesheet' type='text/css'> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicon and Apple Icons -->
		<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
		<!-- <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png"> -->
		<!-- <link rel="apple-touch-icon" sizes="72/72" href="images/icons/apple-touch-icon-72x72.png"> -->
		<!-- <link rel="apple-touch-icon" type="114/114" href="images/icons/apple-touch-icon-114x114.png"> -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- HEADER -->
		<header class="main-header align-center section-content">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo IMAGES; ?>/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>

			<nav class="main-nav align-center">
				<?php  
					   /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							'theme_location' => 'main-menu',
							'menu' => '',
							'container' => '',
							'container_class' => '',
							'container_id' => '',
							'menu_class' => 'inline',
							'menu_id' => '',
							'echo' => true,
							'fallback_cb' => 'wp_page_menu',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth' => 0,
							'walker' => ''
						);
					
						wp_nav_menu( $args );

				?>
				<!-- <ul class="inline">
					<li>Home</li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul> -->
			</nav>

		</header>
		