	
	<footer class="footer">
		<div class="footer__top">
			<div class="center">

				<div class="block">
					<div class="title">
						Маєте запитання до нас? Хочете замовити столик чи будь, що інше?
					</div>
					<figure>
						<img src="<?php echo get_template_directory_uri();?>/images/footer_bg.jpg" alt="">
						<div class="label">
							телефонуй чи пиши!
						</div>
					</figure>					
					<div class="info">
						<span class="top">							
							<?php echo do_shortcode('[admin_phone_sc]'); ?>
						</span>
						<span class="bottom">
							<?php echo get_bloginfo('admin_email'); ?>
						</span>
					</div>
				</div>

			</div>
		</div>
		<div class="footer__bottom">
			<div class="center clearfix">
				<div class="left copy">
					&copy; <?php echo date("Y"); ?> Zalizna-shapka. <br> Всі права захищені
				</div>
				<div class="right by">
					Розробка сайту - <a href="http://belikdesign.com/" target="_blank">Belikdesign.com</a>
				</div> 
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
