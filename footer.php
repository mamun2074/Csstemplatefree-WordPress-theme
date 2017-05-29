<footer>
	

	<?php if(is_active_sidebar('f_widget')): ?>
	
	<div class="widget-area">
		<div class="container">
			<div class="row">
				

				<?php if(function_exists(dynamic_sidebar)){

					dynamic_sidebar('f_widget');
				} ?>				
				<!--<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="footer-widget">
						<h3>About us</h3>
						<p>nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugia</p>
					</div>
				</div>-->




				
			</div>
		</div>
	</div>
	<?php endif; ?>



	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="coppy">
					<p>All coppyright reserved by @ csstemplatefree.com</p>
				</div>
			</div>
		</div>
	</div>
</footer>

	
<?php wp_footer(); ?>
</body>
</html>