<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="content gallery">		
	<div class="center">		
		<h1 class="tac"><?php echo do_shortcode( $atts['page_title'] ); ?></h1>

		<div class="item__list clearfix">
			<?php
				$indexEvents = 1;
			?>
			<?php foreach ( $atts['events'] as $event ) : ?>
				<div class="item" data-index="<?php echo $indexEvents;?>">
					<figure style="background-image:url(<?php echo $event['event_main_img']['url']; ?>);"></figure>
					<div class="bottom">
						<span><?php echo $event['event_title']; ?></span>
						<b><?php echo count($event['photos']); ?></b>
					</div>
				</div>
				<?php
					$indexEvents++;
				?>
			<?php endforeach; ?>			
		</div>

	</div>		
</div>

<?php
	$indexPhotos = 1;
?>
<?php foreach ( $atts['events'] as $event ) : ?>
	<div class="content photos photos__<?php echo $indexPhotos;?>" data-index="<?php echo $indexPhotos;?>">		
		<div class="center">			
			<h1 class="tac"><?php echo $event['event_title']; ?></h1>
			<div class="grid">
				<?php foreach ( $event['photos'] as $photo ) : ?>
					<div class="grid-item">
						<a href="<?php echo $photo['photo_img']['url']; ?>" data-fancybox="gallery_<?php echo $indexPhotos;?>">
							<img src="<?php echo aq_resize( $photo['photo_img']['url'], 400, true ); ?>" alt="">
						</a>
						
					</div>		
				<?php endforeach; ?>			
			</div>
			<div class="back">
				<a>Повернуться до альбомів</a>
			</div>
		</div>	
	</div>	
	<?php
		$indexPhotos++;
	?>
<?php endforeach; ?>

