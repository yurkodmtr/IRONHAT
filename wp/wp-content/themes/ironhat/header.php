<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrap">

<div class="back_to_top">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
	    <line x1="12" y1="20" x2="12" y2="4" />
	    <polyline points="6 10 12 4 18 10" />
	</svg>
</div>

	<?php
		$header_class = '';
		if ( !is_front_page() ) {
			$header_class = 'header_with_logo';
		}
	?>
	<header class="header <?php echo $header_class;?>">
		<div class="center clearfix">

			<?php if ( !is_front_page() ) : ?>
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="">
				</a>
			<?php endif;?> 

			<div class="mobile_nav__open"></div>
			<ul class="nav">
				<li>
					<a href="/about/">Про паб </a>
				</li>
				<li>
					<a href="/menu/">Меню</a>
				</li>
				<li>
					<a href="/hookah/">Кальян</a>
				</li>
				<li>
					<a href="/concerts/">Концерти</a>
				</li>
				<li>
					<a href="/gallery/">Галерея</a>
				</li>   
				<li>
					<a href="/contacts/">Контакти</a>
				</li>                            
			</ul>
			<?php
				$header_img_class = '';
				if ( !is_front_page() ) {
					$header_img_class = 'header_with_logo';
				}
			?>						
			<figure class="header_img <?php echo $header_img_class; ?>">
				<img src="<?php echo get_template_directory_uri();?>/images/header_img.png" alt="">
			</figure>			
		</div>
	</header>

	<div class="mobile_nav">
		<div class="table">
			<div class="table-cell">
				<div class="close"></div>
				<ul>
					<li>
						<a href="/">головна</a>
					</li>
					<li>
						<a href="/about/">Про паб</a>
					</li>
					<li>
						<a href="/menu/">Меню</a>
					</li>
					<li>
						<a href="/hookah/">Кальян</a>
					</li>
					<li>
						<a href="/concerts/">Концерти</a>
					</li>
					<li>
						<a href="/gallery/">Галерея</a>
					</li>   
					<li>
						<a href="/contacts/">Контакти</a>
					</li>                            
				</ul>	
			</div>
		</div>
	</div>	
