<?php theme_include('header'); ?>

<div class="content-bg">

	<div class="container">
	
 		<article>
   		<header class="header-404">
				<h1 style="margin-bottom:0;">Bummer, 404</h1>
				<h4 style="margin-top:0;">Page Not Found</h4>
       	<p class="lead">Unfortunately, the page <code>/<?php echo current_url(); ?></code> could not be found. It may have been moved or deleted.</p>
   		</header>
   		<p>You could try to search for it:</p>

			<form class="site-search" action="<?php echo search_url(); ?>" method="post">
				<input type="search" class="site-search__search-term" name="term" placeholder="Type your search and hit enter&hellip;" value="<?php echo search_term(); ?>">
			</form>
			
			<p><small>or just punch your screen repeatedly until something happens (no, don't do that).</small></p>
 		</article>

	</div>

</div>

<?php theme_include('footer'); ?>