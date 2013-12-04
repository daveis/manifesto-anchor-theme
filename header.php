<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo page_title('Page not found'); ?> - <?php echo site_name(); ?></title>

		<?php if(is_article()): ?>
			<meta name="description" content="<?php echo article_description(); ?>">
		<?php elseif(is_homepage()): ?>
			<meta name="description" content="<?php echo site_description(); ?>">
		<?php elseif(is_page()): ?>
			<meta name="description" content="<?php echo site_description(); ?>">
		<?php endif; ?>

		<link rel="stylesheet" href="<?php echo theme_url('/css/base.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/skeleton-fluid.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/layout.css'); ?>">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400|Ubuntu:300,300italic,700,700italic|PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo article_custom_field('featured-image', 'http://s13.postimg.org/w3p4tc5pz/article_img_default.jpg'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
		<?php if(is_article()): ?>
			<meta property="og:description" content="<?php echo article_description(); ?>">
		<?php elseif(is_homepage()): ?>
			<meta property="og:description" content="<?php echo site_description(); ?>">
		<?php elseif(is_page()): ?>
			<meta property="og:description" content="<?php echo site_description(); ?>">
		<?php endif; ?>
    

    <?php if(customised()): ?>
      <!-- Custom CSS -->
      <style><?php echo article_css(); ?></style>
      <!--  Custom Javascript -->
      <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  </head>
  
	<body class="<?php echo body_class(); ?> id-<?php echo article_id(); ?>">
		<noscript>
			<div class="javascript-warning">
				Yo dawg! Aspects of this website may not work correctly with javascript disabled.<br><strong>Please enable Javascript in your browser settings.</strong>
			</div>
		</noscript>
		
		<header class="site-header clearfix">
			<a class="site-header__menu-trigger" href="#menu-panel"></a>
			<h2 class="site-header__logo"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h2>
			<p class="site-header__description"><?php echo site_description(); ?></p>
			
			<aside class="jpanel-menu menu-panel hidden">
				<div class="menu-panel__menu-wrap">
					
					<form class="site-search" action="<?php echo search_url(); ?>" method="post">
						<input type="search" class="site-search__search-term" name="term" placeholder="Type your search and hit enter&hellip;" value="<?php echo search_term(); ?>">
					</form>
					
					<?php if(has_menu_items()): ?>
					<nav role="navigation">
						<ul class="site-menu">
							<li class="site-menu__list-item--heading">Navigation <i class="fa fa-sitemap"></i></li>
							<li class="site-menu__list-item"><a class="site-menu__item-link" href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>">Home</a></li>
							<?php while(menu_items()): if(hide_show_menu_item(menu_id(), "show-in-menu", "true") === "true") { ?>
							<li class="site-menu__list-item">
								<a class="site-menu__item-link" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
									<?php echo menu_name(); ?>
								</a>
							</li>
	            <?php } endwhile; ?>
	            <?php if(site_meta('twitter_account')): ?>
	              <li class="site-menu__list-item"><a class="site-menu__item-link" href="<?php echo site_meta('twitter_url'); ?>">@<?php echo site_meta('twitter_account'); ?></a></li>
	            <?php endif; ?>
						</ul>
					<?php endif; ?>
						<ul class="site-menu">
							<li class="site-menu__list-item--heading">Categories <i class="fa fa-folder-open"></i></li>
							<?php while(categories()): ?>
							<li class="site-menu__list-item">
								<a class="site-menu__item-link" href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<span class="site-menu__cat-posts-count"><?php echo category_count(); ?></span> <?php echo category_title(); ?>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</nav>
				</div>
			</aside>
		</header>