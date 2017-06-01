		<footer class="container-fluid footer-container">
			<section class="container footer-wrapper">
				<div class="footer-col col-md-4 col-sm-6 col-xs-12">
					<div class="footer-card">
						<a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/white-logo.png" alt="RizePoint" class="logo-img footer-white-logo"></a>
					</div><!-- footer-card -->
					<div class="footer-card">
						<span>RizePoint is the world's most robust compliance software. Now anyone can gather franchise information, collect data, and preform corrective action, thus ensuring that companies keep their brand standards.</span>
					</div><!-- footer-card -->
					<div class="footer-card">
						<a href="#" class="btn btn-lg btn-white">Request A Free Demo</a>
					</div><!-- footer-card -->
				</div><!-- footer-col -->
				<div class="footer-col col-md-3 col-sm-6 col-xs-12">
					<div class="footer-card">
						<h5>General Information</h5>
						<ul>
							<li><a href="mailto:info@rizepoint.com"><i class="fa fa-envelope white-text footer-icons"></i>&nbsp; Info@RizePoint.com</a></li>
							<li><a href="tel:8883137095"><i class="fa fa-phone white-text footer-icons"></i>&nbsp; 888.313.7095</a></li>
						</ul>
					</div><!-- footer-card -->
					<div class="footer-card">
						<h5>Customer Support</h5>
						<ul>
							<li><a href="mailto:customerservice@rizepoint.com"><i class="fa fa-envelope white-text footer-icons"></i>&nbsp; CustomerService@RizePoint.com</a></li>
							<li><a href="tel:8887838861"><i class="fa fa-phone white-text footer-icons"></i>&nbsp; 888.783.8861</a></li>
						</ul>
					</div><!-- footer-card -->
					<div class="footer-card">
						<h5>Salt Lake City, Office</h5>
						<address>
							2890 East Cottonwood Parkway<br>
							Suite 250<br>
							Salt Lake City, Utah 84121<br>
						</address>
						<ul>
							<li><a href="tel:8012859810"><i class="fa fa-phone white-text footer-icons"></i>&nbsp; 801.285.9810</a></li>
						</ul>
					</div><!-- footer-card -->
				</div><!-- footer-col -->
				<div class="footer-col col-md-3 col-sm-6 col-xs-12">
					<div class="footer-card">
						<h5>Solutions By industries</h5>
						<ul>
							<li><a href="#">Food Service</a></li>
							<li><a href="#">Hospitality</a></li>
							<li><a href="#">Retail</a></li>
							<li><a href="#">CSR</a></li>
							<li><a href="#">FSMA</a></li>
						</ul>
					</div><!-- footer-card -->
					<div class="footer-card">
						<h5>Products</h5>
						<ul>
							<li><a href="#">Management Console</a></li>
							<li><a href="#">Mobile Auditor</a></li>
						</ul>
					</div><!-- footer-card -->
				</div><!-- footer-col -->
				<div class="footer-col col-md-2 col-sm-6 col-xs-12">
					<div class="footer-card">
						<h5>Company</h5>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Newsroom</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Community Relations</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Trust.RizePoint.com</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div><!-- footer-card -->
				</div><!-- footer-col -->
			</section><!-- footer-wrapper -->
			<div class="container footer-bottom">
				<div class="top-divider">
					<div class="footer-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook white-text social-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter white-text social-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play white-text social-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin white-text social-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram white-text social-icon"></i></a></li>
						</ul>
					</div><!-- footer-social -->
				</div><!-- top-divider -->
				<div class="bottom-divider">
					<div class="col-md-4 col-sm-6 col-xs-12 left-divider-section">
						<ul>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div><!-- left-divider-sections -->
					<div class="col-md-8 col-sm-6 col-xs-12 right-divider-section">
						<span>1997 - <?php echo date('Y'); ?> &copy; RizePoint.com | All Rights Reserved</span>
					</div><!-- right-divider-sections -->
				</div><!-- bottom-divider -->
			</div><!-- footer-bottom -->
		</footer>
		
		<!-- js -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>		
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/bigslide.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/headScroll.js"></script>
		<script>
						
			// BS collapse hide one show other
			var $industryTarget = $('#industry-target');
			$industryTarget.on('show.bs.collapse','.collapse', function() {
				$industryTarget.find('.collapse.in').collapse('hide');
			});
			var $systemFeatures = $('#system-features');
			$systemFeatures.on('show.bs.collapse','.collapse', function() {
				$systemFeatures.find('.collapse.in').collapse('hide').removeClass('collapse-wrapper');
				$('.feature-drop').addClass('collapse-wrapper');
			});
			
		</script>	
	</body>
</html>