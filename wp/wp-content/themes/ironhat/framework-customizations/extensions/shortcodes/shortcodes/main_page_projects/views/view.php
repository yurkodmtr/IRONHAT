<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<section class="home__projects" id="home__projects" data-background-color="#f3f3f3">
		<div class="wrap">
			<div id="owl-demo" class="owl-carousel owl-theme">
				<?php foreach ( $atts['tabs'] as $tab ) : ?>

					<div class="item">
						<div class="slide">
							<div class="center_point"></div>
							<span class="count">
								<?php echo $tab['tab_count']; ?>
							</span>
							<div class="table">
								<div class="table-row">
									<div class="table-cell">
										<img src="<?php echo $tab['tab_image']['url']; ?>" alt="">
									</div>
									
									<div class="table-cell">
										<a href="<?php echo $tab['tab_link']; ?>">
											<div class="title">
												<?php echo $tab['tab_title']; ?>
											</div>
											<div class="p">
												<?php echo $tab['tab_content']; ?>
											</div>
											<div class="arrow">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="63px" height="9.262px" viewBox="0 0 63 9.262" enable-background="new 0 0 63 9.262" xml:space="preserve">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M59,6v3h1V8h1V7h1V6h1V3h-1V2h-1V1h-1V0h-1v3H0v3H59z"/>
												</svg>
											</div>
										</a>										
									</div>
								</div>								
							</div>
							<div class="content_phone">
								<div class="title">
									<?php echo $tab['tab_title']; ?>
								</div>
								<figure>
									<img src="<?php echo $tab['tab_image']['url']; ?>" alt="">
								</figure>
								<div class="p">
									<?php echo $tab['tab_content']; ?>
								</div>
							</div>
						</div> 
					</div>

				<?php endforeach; ?>
						 
			</div>
		</div>
		
	</section>


