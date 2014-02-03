<?php theme_include('header'); ?>

<div class="content-bg id-<?php echo article_id(); ?>">
		
	<article class="article-post">
	
		<?php if(article_custom_field('featured-image')): ?>
		<div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://s13.postimg.org/w3p4tc5pz/article_img_default.jpg'); ?>);">
			<div class="overlay"></div>
			
				<?php if(article_custom_field('featured-image-credit')): ?>
				<div class="featured-image__credit"><?php echo article_custom_field('featured-image-credit'); ?></div>
				<?php endif; ?>
			
				<header class="post-header">
					<div class="container">
						<h1><?php echo article_title(); ?></h1>
						
						<div class="article-meta">
							<time class="article-meta__time" datetime="<?php echo date(DATE_W3C, article_time()); ?>"> <i class="fa fa-calendar"></i><?php echo relative_time(article_time()); ?></time>
							<!-- Maybe use this later?
							<span class="article-meta__author"><i class="fa fa-user"></i> by <?php echo article_author('real_name'); ?></span>
							-->
							<span class="article-meta__category"><i class="fa fa-folder-o"></i> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></span>
							<span class="article-meta__read-time"><i class="fa fa-clock-o"></i> Read Time: <?php echo dg_est_reading_time(); ?></span>
						</div>
						
						<?php if (article_description()): ?>
							<p class="lead"><?php echo article_description(); ?></p>
						<?php endif; ?>
					</div>
				</header>
		</div>
		
		<?php else: ?>
		<header class="post-header">
			<div class="container">
				<h1><?php echo article_title(); ?></h1>
				
				<div class="article-meta">
					<time class="article-meta__time" datetime="<?php echo date(DATE_W3C, article_time()); ?>"> <i class="fa fa-calendar"></i><?php echo relative_time(article_time()); ?></time>
					<!-- Maybe use this later?
					<span class="article-meta__author"><i class="fa fa-user"></i> by <?php echo article_author('real_name'); ?></span>
					-->
					<span class="article-meta__category"><i class="fa fa-folder-o"></i> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></span>
					<span class="article-meta__read-time"><i class="fa fa-clock-o"></i> Read Time: <?php echo dg_est_reading_time(); ?></span>
				</div>
				
				<?php if (article_description()): ?>
					<p class="lead"><?php echo article_description(); ?></p>
				<?php endif; ?>
			</div>
		</header>
		<?php endif; ?>

		<div class="container post-content">
			
			<?php echo article_markdown(); ?>
		</div>
		
		<footer class="container post-footer">
			<div class="footer-meta clearfix">
				<span class="footer-meta__article">
					<span class="icon-stat"><i class="fa fa-book"></i> <?php echo numeral(article_id()); ?></span>
					article
				</span>
				<span class="footer-meta__words">
					<span class="icon-stat"><i class="fa fa-file-text-o"></i> <?php echo count_words(article_html()); ?></span>
					words
				</span>
				<?php if(comments_open()): ?>
				<span class="footer-meta__comments">
					<span class="icon-stat"><i class="fa fa-comments-o"></i></span>
					<a href="#article-comments"><?php echo total_comments(); ?> comments</a>
				</span>
				<?php endif; ?>
				<a class="footer-meta__tweet" href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?><?php if(site_meta('twitter_account')): ?>&via=<?php echo site_meta('twitter_account'); ?><?php endif; ?>" target="_blank"><span class="icon-stat"><i class="fa fa-twitter"></i></span>
				Tweet This</a>
			</div>
		</footer>
		
	</article>
	<nav class="pagination container clearfix">
		<a<?php echo (article_previous_url() ? ' href="' . article_previous_url() . '"' : ''); ?>><i class="fa fa-chevron-circle-left"></i><span> prev</span></a><a<?php echo (article_next_url() ? ' href="' . article_next_url() . '"' : ''); ?>><span>next </span><i class="fa fa-chevron-circle-right"></i> </a>
	</nav>
	
	<?php if(comments_open()): ?>
	<section class="article-comments" id="article-comments">
		<div class="container clearfix">
			
			<div class="comment-form">
				<h2>Submit a Comment:</h2>
				
				<form id="comment" class="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
					<?php echo comment_form_notifications(); ?>

					<div class="row">
						<div class="eight columns alpha">
							<label for="name">Your name:</label>
							<?php echo comment_form_input_name('placeholder="Your name"'); ?>
						</div>
					
						<div class="eight columns omega">
							<label for="email">Your email address:</label>
							<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
						</div>
					</div>
					<div class="row">
						<label for="text">Your comment:</label>
						<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
						<p class="submit"><?php echo comment_form_button(); ?></p>
					</div>
				</form>
			</div>
			
			<?php if(has_comments()): ?>
			<div class="comments-list">
				<h2>Comments:</h2>
				<ul class="comments-list__list">
					<?php $i = 0; while(comments()): $i++; ?>
					<li class="comment clearfix" id="comment-<?php echo comment_id(); ?>">
						<div class="comment__meta clearfix">
							<span class="comment__counter"><?php echo $i; ?></span>
							<h4 class="comment__name"><?php echo comment_name(); ?></h4>
							<time class="comment__date"><?php echo relative_time(comment_time()); ?></time>
						</div>
						<div class="comment__content">
							<?php echo comment_text(); ?>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
			
		</div>
	</section>
	<?php endif; ?>

</div>

<?php theme_include('footer'); ?>
