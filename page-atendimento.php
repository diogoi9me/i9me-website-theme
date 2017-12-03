<?php get_template_part('templates/html','header');?>

	<?php 
		global $page;
		$slug_page=$page->post_name;
		//Busca dados no campo personalizado da Página
		$resumoPage = get_post_custom_values('wpcf-resume');
		$resumoPage = $resumoPage[0];
		$slug_current = basename(get_permalink());
	?>
	<?php 
		if ( has_post_thumbnail() ) {
			
			//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'full';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

			$bg_banner_single = 'style="background-image:url(' . $urlThumbnail . '); background-size: cover;"';

		} else {
			$urlThumbnail	= '';
			$bg_banner_single = '';
		}
	?>
	<div class="banner-single" 
	<?php echo $bg_banner_single; ?>>
		<header class="banner-single__header">
			<h2 class="banner-single__title"><?php the_title() ?></h2>
			<p class="banner-single__subtitle"><?php echo $resumoPage; ?></p>
		</header>
	</div>
	<div class="breadcrumb">
		<div class="container">
			<?php get_template_part('breadcrumb');?>
		</div>
	</div>
<article class="page-atendimento colls colls--table-relative">


	<section class="page-atendimento__talkme coll coll--coll-1x2 padding-horizontal">
		<header class="header-subsection">
			<i class="header-subsection__icon"></i>
			<h2 class="header-subsection__title header-subsection__title--blue">FALE CONOSCO</h2>
			<p class="header-subsection__resume">Deixe aqui a sua solicitação que nós retornaremos ao seu contato o mais breve possível.</p>
		</header>
		<main class="main-subsection">
			<form class="form-i9me">
				<?php echo do_shortcode('[contact-form-7 id="325" title="Page Atendimento"]'); ?>
				<!-- <fieldset class="main-section__colls colls colls--table-relative colls--spacing">
					<p class="coll coll--coll-1x2 name">
						<label for="your-name">NOME</label>
						<input type="text" name="your-name">
					</p>
					<p class="coll coll--coll-1x2 email">
						<label for="your-email">E-MAIL</label>
						<input type="email" name="your-email">
					</p>
					<p class="coll coll--coll-1x2 phone">
						<label for="your-phone">TELEFONE</label>
						<input type="tel" name="your-phone">
					</p>
					<p class="coll coll--coll-1x2 subject">
						<label for="subject">ASSUNTO</label>
						<input type="text" name="subject">
					</p>
					<p class="coll coll--coll-2x2 messenger">
						<label for="your-mensage">MENSAGEM</label>
						<textarea name="your-mensage"></textarea>
					</p>
					<p class="coll coll--coll-2x2 submit align-center">
						<input class="inline-block" type="submit" value="ENVIAR">
					</p>	
				</fieldset> -->
			</form>
		</main>
	</section>

	<section class="page-atendimento__contacts coll coll--coll-1x2">
		
		<header class="header-subsection--hidden">
			<h2>CONTATO TELEFONE E WHATSAPP AGÊNCIA DIGITAL WEBDESIGN EM FORTALEZA</h2>
			<h3>DESENVOLVIMENTO DE LOJA VIRTUAL, SITES, LANDING PAGES</h3>
			<h2>CONTATO TELEFONE E WHATSAPP ESTÚDIO, ESCRITÓRIO DE DESIGN EM FORTALEZA / CE</h2>
			<h3>IDENTIDADE VISUAL, LOGOTIPO E DESIGN GRÁFICO.</h3>
		</header>

		<main class="main-subsection padding-horizontal padding-left">
			<ul class="lists-contacts">
				<li class="lists-contacts__item phone">
					<i class="lists-contacts__item-icon"></i>
					<span class="lists-contacts__item-ddd">(85)</span>
					<span class="lists-contacts__item-value">4042-0841</span>
				</li>
				<li class="lists-contacts__item whatsapp">
					<i class="lists-contacts__item-icon"></i>
					<span class="lists-contacts__item-ddd">(85)</span>
					<span class="lists-contacts__item-value">99862-4149</span>
				</li>
				<li class="lists-contacts__item email">
					<i class="lists-contacts__item-icon"></i>
					<span class="lists-contacts__item-value--size-2">contato@i9me.com.br</span>
				</li>
				<li class="lists-contacts__item address">
					<i class="lists-contacts__item-icon"></i>
					<span class="lists-contacts__item-value--size-2">Rua Ieda Pereira, Nº 534, Sala 05 - Pq. Manibura - Fortaleza/CE - CEP: 60821-572</span>
				</li>
			</ul>	
		</main>
		<footer class="footer-subsection">
			<img  data-paroller-factor="-0.30" data-paroller-type="foreground" class="img-atendimento" src="<?php echo get_template_directory_uri() ?>/assets/images/atendimento-i9me-web-design-fortaleza-ce.png" alt="ATENDIMENTO I9ME WEB & DESIGN" />
		</footer>
	</section>

	<section class="page-atendimento__map coll coll--coll-2x2">
		<header class="header-subsection--hidden">
			<h2>LOCALIZAÇÃO AGÊNCIA DIGITAL WEBDESIGN EM FORTALEZAE / CE</h2>
			<h3>DESENVOLVIMENTO DE LOJA VIRTUAL, SITES, LANDING PAGES</h3>
			<h2>LOCALIZAÇÃO ESTÚDIO, ESCRITÓRIO DE DESIGN EM FORTALEZA / CE</h2>
			<h3>IDENTIDADE VISUAL, LOGOTIPO E DESIGN GRÁFICO.</h3>
		</header>
		<main class="main-subsection">
				<iframe class="localizacao__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.09995194693!2d-38.490588385620505!3d-3.7884171445405173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74f616e77fe93%3A0x2fa56ee94a69b0ea!2sI9ME+Web+%26+Design!5e0!3m2!1spt-BR!2sbr!4v1508249512584" frameborder="0" style="border:0" allowfullscreen></iframe>
		</main>
	</section>

	<section class="horarios">
		<div class="container">
			<p class="horarios__open">Funcionamos de <strong>segunda</strong> a <strong>sexta, das 8h as 18h.</strong></p>
		</div> 
	</section>


</article>
<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>

