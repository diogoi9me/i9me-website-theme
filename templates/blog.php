<?php 
	$page = get_page_by_path('blog');
	$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
	$resumoSection = $resumoSection[0];
 ?>
<section class="blog padding-bottom Section--blog padding-vertical" id="blog">
	<header class="header-section padding-vertical">
		<div class="header-section__box">
			<h2 <?php if ( wp_is_mobile() ) { echo 'class="header-section__title"'; } else { echo 'class="header-section__title wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0s"'; } ?>><span>Blog</span></h2>
		</div>
		
		<p <?php if ( wp_is_mobile() ) { echo 'class="header-section__subtitle"'; } else { echo 'class="header-section__subtitle wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0.25s"'; } ?>>
			<?php echo $resumoSection; ?>	
		</p>
	</header>

		
		<?php get_template_part('templates/blog','loop');?>
		
	
</section>