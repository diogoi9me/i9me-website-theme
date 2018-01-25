<?php 
	$page = get_page_by_path('depoimentos');
	$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
	$resumoSection = $resumoSection[0];
 ?>
<section class="depoimentos padding-bottom" id="depoimento">
	<div class="container">		
		<header class="header-section padding-vertical">
			<div class="header-section__box">
				<h2 <?php if ( wp_is_mobile() ) { echo 'class="header-section__title"'; } else { echo 'class="header-section__title wow_fadeInUp" data-wow-duration="0.35s" data-wow-delay="0s"'; } ?>><span>Depoimentos</span></h2>
			</div>
			
			<p class="header-section__subtitle" <?php if ( wp_is_mobile() ) { echo 'class="header-section__subtitle"'; } else { echo 'class="header-section__subtitle wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0.25s"'; } ?>>
				<?php echo $resumoSection; ?>
			</p>
		</header>
				<div class="depoimentos__carousel" id="depoimentos">
					<?php get_template_part('templates/depoimento','loop');?>
				</div>
		
	</div>
</section>