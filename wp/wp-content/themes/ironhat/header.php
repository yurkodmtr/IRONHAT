<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrap">

	<header class="header">
		<div class="center clearfix">

			<?php if ( !is_home() ) : ?>
				<a href="#" class="logo">
					<img src="<?php echo get_template_directory_uri();?>/images/header_logo.png" alt="">
				</a>
			<?php endif;?> 

			<div class="mobile_nav__open"></div>
			<ul class="nav">
				<li class="active">
					<a href="#">Про паб</a>
				</li>
				<li>
					<a href="#">Меню</a>
				</li>
				<li>
					<a href="#">Кальян</a>
				</li>
				<li>
					<a href="#">Концерты</a>
				</li>
				<li>
					<a href="#">Галерея</a>
				</li>   
				<li>
					<a href="#">Контакти</a>
				</li>                            
			</ul>			
			<figure class="header_img">
				<img src="<?php echo get_template_directory_uri();?>/images/header_img.png" alt="">
			</figure>			
		</div>
	</header>

	<div class="mobile_nav">
		<div class="table">
			<div class="table-cell">
				<div class="close"></div>
				<ul>
					<li class="active">
						<a href="#">Про паб</a>
					</li>
					<li>
						<a href="#">Меню</a>
					</li>
					<li>
						<a href="#">Кальян</a>
					</li>
					<li>
						<a href="#">Концерты</a>
					</li>
					<li>
						<a href="#">Галерея</a>
					</li>   
					<li>
						<a href="#">Контакти</a>
					</li>                            
				</ul>	
			</div>
		</div>
	</div>	
