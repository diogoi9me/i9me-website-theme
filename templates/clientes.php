<section class="clientes">
	<header class="header-section header-section--area-clientes">
		<div class="header-section__box header-section__box--before-blue">
			<h2 <?php if ( wp_is_mobile() ) { echo 'class="header-section__title header-section__title--before-blue"'; } else { echo 'class="header-section__title header-section__title--before-blue wow_fadeInUp" data-wow-duration="0.35s" data-wow-delay="0s"'; } ?>><span>Clientes</span></h2>
		</div>
	</header>
	<div class="container">		
		
		<div class="clientes__carousel" id="clientes">
			<?php get_template_part('templates/clientes','loop');?>
		</div>
	</div>
</section>