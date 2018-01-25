<?php 
	$page = get_page_by_path('servicos');
	$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
	$resumoSection = $resumoSection[0];
?>
<section class="servicos" id="servicos">
	<div class="servicos__layertop">
		<header class="header-section padding-vertical">
			<div class="header-section__box header-section__box--before-blue">
				<h2 <?php if ( wp_is_mobile() ) { echo 'class="header-section__title header-section__title--before-blue"'; } else { echo 'class="header-section__title header-section__title--before-blue wow_fadeInUp" data-wow-duration="0.35s" data-wow-delay="0s"'; } ?>><span><?php echo get_the_title( $page ); ?></span></h2>
			</div>
			
			<p <?php if ( wp_is_mobile() ) { echo 'class="header-section__subtitle header-section__subtitle--textwhite"'; } else { echo 'class="header-section__subtitle header-section__subtitle--textwhite wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0.25s"'; } ?>>
				<?php 
					echo $resumoSection;
				 ?>	 	
			</p>

		</header>
		
	</div>
	
	<?php get_template_part('templates/servico','loop');?>
	
	
</section>

<?php wp_reset_postdata(); ?>