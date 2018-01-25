<?php 
	if( is_home() || is_front_page() ) {

		$limit_res = '4';
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $limit_res, 'orderby' => 'date', 'order' => 'DESC' );
	
	} elseif( is_single() && get_post_type() == 'cliente'  ) {
	
		$limit_res = '4';
		$post_id = get_the_ID();
		$args = array(
		'post_type' => 'portfolio',
		'posts_per_page' => $limit_res,
		//'meta_key' => 'wpcf-order',
		'orderby' => 'date',
		'order' => 'ASC',
		'meta_query' => array(array('key' => '_wpcf_belongs_cliente_id', 'value' => $post_id ))
		);

	} elseif( is_single() && get_post_type() == 'servico'  ) {
	
		$limit_res = '4';
		$post_id = get_the_ID();
		$args = array(
		'post_type' => 'portfolio',
		'posts_per_page' => $limit_res,
		//'meta_key' => 'wpcf-order',
		'orderby' => 'date',
		'order' => 'ASC',
		'meta_query' => array(array('key' => '_wpcf_belongs_servico_id', 'value' => $post_id ))
		);
	
	} else {	

		$limit_res = '10';
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $limit_res, 'orderby' => 'date', 'order' => 'DESC', 'paged' => $paged );
	
	}

?>


	<ul id="<?php if ( wp_is_mobile() && is_home() || wp_is_mobile() && is_front_page() ) { echo 'portfolio-owl'; } else { echo 'portfolio--container'; }  ?>">
		<?php $loop = new WP_Query( $args );
			$contador = 1; //Iniciado em um para exibir um na primeira iteração
			while ( $loop->have_posts() ) : $loop->the_post();
				//Variaveis do Post
				$resumo = get_post_custom_values('wpcf-resume');
				$resumo = $resumo[0];
	    		if ( has_post_thumbnail() ) {
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'medium';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];
				$alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
				} else {
					$urlThumbnail	= '';
				}
	    ?>	
		<?php 
		// Get the ID of the parent post, which belongs to the "Writer" post type
		$customer_id = wpcf_pr_post_get_belongs( get_the_ID(), 'cliente' );
		// Get all the parent (writer) post data
		$customer_post = get_post( $customer_id );
		// Get the ID of the parent post, which belongs to the "Writer" post type
		$service_id = wpcf_pr_post_get_belongs( get_the_ID(), 'servico' );
		// Get all the parent (writer) post data
		$service_post = get_post( $service_id );

		?>
        <li class="groupboxes__boxitem item">
        	<a href="<?php echo get_permalink(); ?>">
				<figure class="groupboxes__hover <?php if( $contador % 2 == 0 ) { echo 'color-b'; } ?>">
					<img src="<?php echo $urlThumbnail; ?>" alt="<?php echo $alt; ?>">
						<figcaption class="groupboxes__legend">
							<div class="groupboxes__border <?php if( $contador % 2 == 0 ) { echo 'groupboxes__border--right'; } ?>">
								<h5 class="groupboxes__title"><?php echo $service_post->post_title; ?></h5>
								<span class="groupboxes__subtitle"><?php echo  $customer_post->post_title; ?></span>
							</div>
						</figcaption>
				</figure>
			</a>
		</li>
		<?php $contador += 1; //Incrementa o contador para a próxima iteração do loop ?>
		<?php endwhile; ?> 
		</ul>
		<?php if( !is_home() && !is_front_page()  && !is_single() ) { ?>
			<!-- pagination -->
			<div class="controls">
	        	
	            <?php echo get_previous_posts_link( '' ); ?>
	            <a href="<?php echo home_url(); ?>/portfolios/" class="controls__center"></a>
	            <?php echo get_next_posts_link( '', $loop->max_num_pages ); ?>
	        	
	        </div>
			 
		<?php } ?>  	
	
	   