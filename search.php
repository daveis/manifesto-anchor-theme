<?php theme_include('header'); ?>

<div class="content-bg">

	<div class="container">
		<h1 class="search-results-title"><i class="fa fa-search"></i> You searched for: &ldquo;<span><?php echo search_term(); ?></span>&rdquo;</h1>
	</div>
	
	<?php if(has_search_results()): ?>
		<ol class="search-results-items">
			<?php $i = 0; while(search_results()): $i++; ?>
			<li>
				<article class="article-excerpt article-excerpt__search">
					<div class="container">
						<h2>
							<a class="dark" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h2>
					</div>
				</article>
			</li>
			<?php endwhile; ?>
		</ol>

	<?php if(has_pagination()): ?>
	<nav class="pagination container clearfix">
		<?php echo search_prev('<i class="fa fa-chevron-circle-left"></i><span> older posts</span>', '<a><i class="fa fa-chevron-circle-left"></i><span> older posts</span></a>'); ?><?php echo search_next('<span>newer posts </span><i class="fa fa-chevron-circle-right"></i>', '<a><span>newer posts </span><i class="fa fa-chevron-circle-right"></i></a>'); ?>
	</nav>
	<?php endif; ?>

	<?php else: ?>
	<div class="container">
		<p>Nothing found... you could try a new search below.</p>
		
		<form class="site-search" action="<?php echo search_url(); ?>" method="post">
			<input type="search" class="site-search__search-term" name="term" placeholder="Type your search and hit enter&hellip;" value="<?php echo search_term(); ?>">
		</form>
	</div>
	<?php endif; ?>

</div>

<?php theme_include('footer'); ?>