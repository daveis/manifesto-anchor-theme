<?php theme_include('header'); ?>

<div class="content-bg">

		<section class="article-posts">
			
			<?php if(has_posts()): ?>
				<!-- We have posts, it's safe to loop. -->
					<?php while(posts()): ?>
						<article class="article-excerpt">
							<div class="container">
								
								<h2 class="article-excerpt__headline"><a class="dark" href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
								
								<div class="article-meta">
									<time class="article-meta__time" datetime="<?php echo date(DATE_W3C, article_time()); ?>"> <i class="fa fa-calendar"></i><?php echo relative_time(article_time()); ?></time>
									<!-- Maybe use this later?
									<span class="article-meta__author"><i class="fa fa-user"></i> by <?php echo article_author('real_name'); ?></span>
									-->
									<span class="article-meta__category"><i class="fa fa-folder-o"></i> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></span>
									<span class="article-meta__read-time"><i class="fa fa-clock-o"></i> Read Time: <?php echo dg_est_reading_time(); ?></span>
								</div>
								
								<?php if (article_description()): ?>
								<div class="article-excerpt__intro">
									<p><?php echo article_description(); ?><a class="article-exceprt__readmore" href="<?php echo article_url(); ?>"> Continue Reading &#8594;</a></p>
								</div>
								<?php endif; ?>

							</div>
						</article>
					<?php endwhile; ?>
					
					<?php if(has_pagination()): ?>
					<nav class="pagination container clearfix">
						<?php echo posts_prev('<i class="fa fa-chevron-circle-left"></i><span> older posts</span>', '<a><i class="fa fa-chevron-circle-left"></i><span> older posts</span></a>'); ?><?php echo posts_next('<span>newer posts </span><i class="fa fa-chevron-circle-right"></i>', '<a><span>newer posts </span><i class="fa fa-chevron-circle-right"></i></a>'); ?>
					</nav>
					<?php endif; ?>

			<?php else: ?>
			<article class="no-posts-yet">
				<div class="container">
					<h2>No posts</h2>
					<p>Yeah, I haven't actually written anything here yet. I should probably write something.</p>
				</div>
			</article>
			<?php endif; ?>
		</section>
		
</div>

<?php theme_include('footer'); ?>
