		<?php 
			if( is_home() || is_front_page() ) {	
				$limit_res = '2';
			} else {
				$limit_res = '12';
			}
			$args = array( 'post_type' => 'post', 'posts_per_page' => $limit_res, 'orderby' => 'date', 'order' => 'DESC' );
		?>

		<ul class="Section-items u-displayFlex u-flexSwitch--desktop u-flexDirectionColumnShwitchRow u-sizeFull" id="<?php if ( wp_is_mobile() && is_home() || wp_is_mobile() && is_front_page() ) { echo 'blog-owl'; } else { echo 'blog--container'; }  ?>">
			<?php $loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
					
					//Variaveis do Post
					$resumo = get_the_excerpt();

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
		    <li class="Section-items-item u-positionRelative">
				<figure class="Section-items-item-figure">
					<a class="Section-items-item-link animating" href="<?php echo get_permalink(); ?>">
						<img class="Section-items-item-figure-imgSrc u-sizeObjectFitCover" src="<?php echo $urlThumbnail; ?>" alt="<?php echo $alt; ?>">
						<figcaption class="Section-items-item-figcaption animating">
							<h5 class="Section-items-item-title animating"><?php echo get_the_title(); ?></h5>
							<?php if ( !wp_is_mobile() ) { 
								echo '<p class="Section-items-item-resume animating">' . get_the_excerpt() . '</p>';
							}
							?>
						</figcaption>
					</a>
				</figure>
			</li>
		    <?php endwhile; ?>
		</ul>
		<div class="groupboxes__vermais">
			<a href="<?php echo home_url(); ?>/blog/" class="btn-plus"></a>
		</div>	
