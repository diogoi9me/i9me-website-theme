<?php 
	$page = get_page_by_path('portfolio-i9me');
	$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
	$resumoSection = $resumoSection[0];
 ?>
<section class="portfolio" id="portfolio">
	<header class="header-section padding-vertical">
		<div class="header-section__box">
			<h2 <?php if ( wp_is_mobile() ) { echo 'class="header-section__title"'; } else { echo 'class="header-section__title wow_fadeInUp" data-wow-duration="0.35s" data-wow-delay="0s"'; } ?>><span>Portfólio</span></h2>
		</div>
		<p <?php if ( wp_is_mobile() ) { echo 'class="header-section__subtitle"'; } else { echo 'class="header-section__subtitle wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0.25s"'; } ?>>
			<?php echo $resumoSection; ?>	 	
		</p>
	</header>
	<article class="portfolio__conteudo">	
		<div class="container">
			
			<div class="groupboxes">
				<?php get_template_part('templates/portfolio','loop');?>
			</div>
			<div class="groupboxes__vermais wow rotateIn">
				<a href="<?php echo home_url() ?>/portfolio-i9me/" class="btn-plus">
				</a>
			</div>

		</div>
	</article>
</section>