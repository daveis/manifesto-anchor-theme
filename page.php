<?php theme_include('header'); ?>

<div class="content-bg page-id-<?php echo page_id(); ?>">
	<div class="main-content">

		<div class="container">
			<section class="article archive">
				<article class="wrap post">
					<h1><?php echo page_title(); ?></h1>
	        <?php echo page_content(); ?>
				</article>
			</section>
		</div>
			
	</div>
</div>

<?php theme_include('footer'); ?>