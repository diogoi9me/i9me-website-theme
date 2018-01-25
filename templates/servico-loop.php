<?php 

$term_design = get_term_by('name', 'design', 'tipo-de-servico');
$term_web = get_term_by('name', 'web', 'tipo-de-servico');

	if( is_home() || is_front_page() ) {
		$limit_res = '4';
	} else {
		$limit_res = '8';
	}
 ?>
 <?php 
 		if ( is_page('design') || is_page('servicos') || is_home() || is_front_page() || is_archive()) {
 ?>
 	<article class="servicos__design" id="design">
		<div class="boxes">
			<div class="container-full max-size-width">

				<div class="boxes__box-left">

					<header class="header-section header-section--area-design left-padding--col-inter">
						<div class="header-section__box header-section__box--design">
							<span class="header-section__title header-section__title--design">
								<i class="icon-design"></i>
							</span>
						</div>
						<div class="bloco-title">
			        		<h2 class="title-design">DESIGN</h2>
							<p class="subtitle-design">
								<?php echo $term_design->description; ?>
							</p>
						</div>
					</header>

					<header class="title-servicos">
						<h2>Design</h2>
						<p class="subtitle-servicos">
						<?php 
							echo $term_design->description;
						 ?>
						</p>
					</header> 

					<figure class="box-parallax" data-paroller-factor="0.25">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-design-front-img.png" class="box-parallax__front-img" data-paroller-factor="0.10" data-paroller-type="foreground"/>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-design-middle-img.png" class="box-parallax__middle-img" data-paroller-factor="-0.10" data-paroller-type="foreground">
						
					</figure>

					<!-- <figure class="box__lapis"></figure> -->

				</div>

				<div class="boxes__box-right padding-horizontal">

					<ul class="lista lista--design right-padding--col-inter">
						<?php
							$tax_slug =  'tipo-de-servico';
			    			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'design',),), );
						 ?>
						<?php $loop = new WP_Query( $args );
			  				while ( $loop->have_posts() ) : $loop->the_post();
			  					
			  					//Variaveis do Pst
			  					$slug = basename(get_permalink());
			  					$resumo = get_post_custom_values('wpcf-resume');
			    				$resumo = $resumo[0];

			    				$icone = get_post_custom_values('wpcf-icone');
								$icone = $icone[0];

								$icone_hover = get_post_custom_values('wpcf-icone-hover');
								$icone_hover = $icone_hover[0];

			  			 ?>	
						<li class="lista__item">
							<figure>
								<a href="<?php echo get_permalink(); ?>">
									<div class="lista__bordas wow zoomIn" data-wow-duration="0.25" data-wow-delay="0">
											<i class="servicos__<?php echo $slug; ?>">
												<img class="icon" src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
												<img class="icon-hover" src="<?php echo $icone_hover; ?>" alt="<?php echo the_title(); ?>" />
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
									<p class="lista__smallcontent"><?php echo $resumo; ?></p>
								</figcaption>
							</figure>						
						</li>
						<?php endwhile; ?> 
						<?php if( is_home() || is_front_page() ): ?>
						<div class="groupboxes__vermais groupboxes__vermais--servicos wow rotateIn" data-wow-duration="0.25" data-wow-delay="0">
							<a href="<?php echo home_url(); ?>/servicos/design/" class="btn-plus"></a>
						</div>
					<?php endif; ?>
					</ul>	
					
				</div>
			</div>	
		</div>	
	</article>
	<?php } ?>
	<?php
 		if ( is_page('web') || is_page('servicos') || is_home() || is_front_page() || is_archive() ) {
 	?>  
	<article class="servicos__web" id="web">
		<div class="boxes boxes--reverse">
			<header class="title-servicos">
				<h2>Web</h2>
				<p class="subtitle-servicos">
				<?php 
					echo $term_web->description;
				 ?>
				</p>
			</header>
			<div class="container-full max-size-width">
				<div class="boxes__box-right padding-horizontal">
					<ul class="lista lista--web left-padding--col-inter">
						<?php
							$tax_slug =  'tipo-de-servico';
	            			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'web',),), );
						 ?>
						<?php $loop = new WP_Query( $args );
	          				while ( $loop->have_posts() ) : $loop->the_post();
	          					
	          					//Variaveis do Pst
	          					$slug = basename(get_permalink());
	          					$resumo = get_post_custom_values('wpcf-resume');
	            				$resumo = $resumo[0];

	            				$icone = get_post_custom_values('wpcf-icone');
								$icone = $icone[0];

								$icone_hover = get_post_custom_values('wpcf-icone-hover');
								$icone_hover = $icone_hover[0];
	          			 ?>	
						<li class="lista__item">
							<figure>
								<a href="<?php echo get_permalink(); ?>">
									<div class="lista__bordas lista__bordas--white wow zoomIn" data-wow-duration="0.25" data-wow-delay="0">
											<i class="lista__<?php echo $slug; ?>">
												<img class="icon" src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
												<img class="icon-hover" src="<?php echo $icone_hover; ?>" alt="<?php echo the_title(); ?>" />
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
									<p class="lista__smallcontent"><?php echo $resumo; ?></p>
								</figcaption>
							</figure>						
						</li>
						<?php endwhile; ?>
					</ul>
						<?php if( is_home() || is_front_page() ): ?>
							<div class="groupboxes__vermais groupboxes__vermais--servicos wow rotateIn" data-wow-duration="0.25" data-wow-delay="0">
								<a href="<?php echo home_url(); ?>/servicos/web/" class="btn-plus"></a>
							</div>
						<?php endif; ?>	
				</div>
				<div class="boxes__box-left">
					<header class="header-section header-section--area-design header-section--area-web right-padding--col-inter">
						<div class="bloco-title bloco-title--right">
			        		<h2 class="title-web  ">WEB</h2>
							<p class="subtitle-web">
								<?php echo $term_web->description; ?>
							</p>
						</div>
						<div class="header-section__box header-section__box--design">
			        		<span class="header-section__title header-section__title--web">
								<i class="icon-web"></i>
							</span>
						</div>
						
					</header> 
					 
					<!-- <figure class="box__smarthphone"></figure> -->
					<figure class="box-parallax">
						<img class="box-parallax__front-img" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="vertical" src="<?php echo get_template_directory_uri() . '/assets/images/service-web-front-img.png'; ?>">

						<img class="box-parallax__back-img" data-paroller-factor="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" src="<?php echo get_template_directory_uri() . '/assets/images/service-web-back-img.png'; ?>">

					</figure>
										
				</div>
			</div>
		</div>	
	</article>
	<?php } ?>
