<?php get_header(); ?>

<div class="container-fluid orange-pink-purple">
	<?php include('includes/page-header.php'); ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>The Industry Standard Platform For Brand, Quality, &amp; Safety Compliance</h1>
			<div class="banner-btns">
				<button type="button" class="btn btn-lg btn-width btn-white orange-text" data-toggle="modal" data-target="#homeVideo">Watch a Video</button> <a href="#" class="btn btn-lg btn-width btn-inverse-white">Try It</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
		

<!-- HOME VIDEO MODAL -->
<div class="modal fade" id="homeVideo" tabindex="-1" role="dialog" aria-labelledby="homeVideoLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="homeVideoLabel">Allow Us To Introduce Ourselves</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/in3fdjpcii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_in3fdjpcii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-green btn-medium">Request A Demo</button>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->
			
<section id="industry-target" class="container-fluid home-intro wrap push">
	<div class="container home-intro-wrapper">
		<div class="home-intro-top">
			<h2 class="green-text">What's Your Industry?</h2>
			<p>Click your industry to see how RizePoint can help you with your business needs</p>
		</div><!-- row -->
		
		<div class="home-switch-zero">
			<div class="circle-row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle purple-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-1" aria-expanded="false">
						<img src="<?php echo ROOT; ?>assets/img/icons/food-service-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Food</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle pink-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-2" aria-expanded="false" >
						<img src="<?php echo ROOT; ?>assets/img/icons/hospitality-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Hospitality</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle orangeTwo-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-3" aria-expanded="false">
						<img src="<?php echo ROOT; ?>assets/img/icons/retail-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Retail</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle green-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-4" aria-expanded="false">
						<img src="<?php echo ROOT; ?>assets/img/icons/rocket-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Other</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
			</div><!-- circle-row -->
		</div><!-- home-switch-zero -->
		
		<div class="home-switch-one">
			<div class="circle-row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-1">
					<div class="circle-icon industry-circle purple-bg box-shadow">
						<img src="<?php echo ROOT; ?>assets/img/icons/food-service-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Food</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-2">
					<div class="circle-icon industry-circle pink-bg box-shadow">
						<img src="<?php echo ROOT; ?>assets/img/icons/hospitality-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Hospitality</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-3">
					<div class="circle-icon industry-circle orangeTwo-bg box-shadow">
						<img src="<?php echo ROOT; ?>assets/img/icons/retail-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Retail</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-4">
					<div class="circle-icon industry-circle green-bg box-shadow">
						<img src="<?php echo ROOT; ?>assets/img/icons/rocket-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4>Other</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
			</div><!-- circle-row -->
		</div><!-- home-switch-one -->
		
		<!-- INDUSTRY SWITCH MODAL -->
		<div class="modal fade" id="industry-btn-1" tabindex="-1" role="dialog" aria-labelledby="industry-btn-1-Label">
			<div class="large-modal modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="industry-btn-1-Label">How RizePoint Can Help You | Food Industry</h4>
					</div>
					<div class="modal-body">
						1
					</div><!-- modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-inverse-green btn-medium">Learn More</button> <button type="button" class="btn btn-green btn-medium">Request A Demo</button>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
		<div class="modal fade" id="industry-btn-2" tabindex="-1" role="dialog" aria-labelledby="industry-btn-2-Label">
			<div class="large-modal modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="industry-btn-2-Label">How RizePoint Can Help You | Hospitality</h4>
					</div>
					<div class="modal-body">
						2
					</div><!-- modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-inverse-green btn-medium">Learn More</button> <button type="button" class="btn btn-green btn-medium">Request A Demo</button>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
		<div class="modal fade" id="industry-btn-3" tabindex="-1" role="dialog" aria-labelledby="industry-btn-3-Label">
			<div class="large-modal modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="industry-btn-3-Label">How RizePoint Can Help You | Retail</h4>
					</div>
					<div class="modal-body">
						3
					</div><!-- modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-inverse-green btn-medium">Learn More</button> <button type="button" class="btn btn-green btn-medium">Request A Demo</button>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
		<div class="modal fade" id="industry-btn-4" tabindex="-1" role="dialog" aria-labelledby="industry-btn-4-Label">
			<div class="large-modal modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="industry-btn-4-Label">How RizePoint Can Help You | Other</h4>
					</div>
					<div class="modal-body">
						4
					</div><!-- modal-body -->
					<div class="modal-footer">
						<button type="button" class="btn btn-inverse-green btn-medium">Learn More</button> <button type="button" class="btn btn-green btn-medium">Request A Demo</button>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		
	</div><!-- home-intro-wrapper -->

	<!-- INDUSTRIES CONTENTS -->
	<div class="collapse purple-bg container-fluid" id="industry-feature-1">
		<div class="feature-container">
			<div class="img-pointer pointer-1"></div>
			<h2>How RizePoint Can Help You | Food Industry</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/1ax7ngyryl.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_1ax7ngyryl videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="#" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="#" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
	<div class="collapse pink-bg container-fluid" id="industry-feature-2">
		<div class="feature-container">
		<div class="img-pointer pointer-2"></div>
			<h2>How RizePoint Can Help You | Hospitality</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/1ax7ngyryl.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_1ax7ngyryl videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="#" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="#" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
	<div class="collapse orangeTwo-bg container-fluid" id="industry-feature-3">
		<div class="feature-container">
		<div class="img-pointer pointer-3"></div>
			<h2>How RizePoint Can Help You | Retail</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/1ax7ngyryl.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_1ax7ngyryl videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="#" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="#" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
	<div class="collapse green-bg container-fluid" id="industry-feature-4">
		<div class="feature-container">
		<div class="img-pointer pointer-4"></div>
			<h2>RizePoint Can Help Any Industry. Find Out How!</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/1ax7ngyryl.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_1ax7ngyryl videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="#" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="#" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
</section><!-- home-intro -->



<section class="container-fluid home-section-two lightGray-bg wrap push">
	<div class="container home-section-two-wrapper">

			<h2 class="green-text">Empowering You To Build A High Performance Organization</h2>
			<p>RizePoint software clearly aligns and unifies field teams, regional management, and executive leadership around the organization's compliance performance. Our customers gather better data, see necessary actions earlier, and act faster to correct issues before they become costly liabilities.</p>

		
			<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
				<div class="circle-icon">
					<img src="<?php echo ROOT; ?>assets/img/icons/minified-small/money-black.png" alt="Gather Better" class="circle-icon-img">
				</div><!-- purple-bg -->
				<div class="circle-header">
					<h4>Improve Revenue And Profitability</h4>
				</div><!-- circle-header -->
			</div><!-- circle-wrapper -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
				<div class="circle-icon">
					<img src="<?php echo ROOT; ?>assets/img/icons/minified-small/trend-lines-black.png" alt="Gather Better" class="circle-icon-img">
				</div><!-- purple-bg -->
				<div class="circle-header">
					<h4>Ensure Ongoing Compliance</h4>
				</div><!-- circle-header -->
			</div><!-- circle-wrapper -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
				<div class="circle-icon">
					<img src="<?php echo ROOT; ?>assets/img/icons/minified-small/checkmark-black.png" alt="Gather Better" class="circle-icon-img">
				</div><!-- purple-bg -->
				<div class="circle-header">
					<h4>Strengthen Operational Quality</h4>
				</div><!-- circle-header -->
			</div><!-- circle-wrapper -->
			<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
				<div class="circle-icon">
					<img src="<?php echo ROOT; ?>assets/img/icons/minified-small/gears-black.png" alt="Gather Better" class="circle-icon-img">
				</div><!-- purple-bg -->
				<div class="circle-header">
					<h4>Maintain Greater Visibility</h4>
				</div><!-- circle-header -->
			</div><!-- circle-wrapper -->
	
	</div><!-- home-section-two-wrapper -->
</section><!-- home-section-two -->
		
<section class="slant-wrapper lightGray-bg wrap push">	
	<section class="container-fluid mobile-auditor">
		<div class="slant green-bg mobile-auditor-size">
			<div class="slant-content-wrapper">
				<div class="col-md-6 col-sm-12 ma-slant-left">
					<h3>Mobile Auditor</h3>
					<h4>From Front Door to Final Report. Fast.</h4>
					<ul>
						<li>Inspect every location efficiently using mobile tools</li>
						<li>Perform auditos using smartphones, tablest or web browsers</li>
						<li>Go whereever needed with offline access</li>
						<li>Guide audits with step-by-step navigation</li>
					</ul>
					<div class="home-mobile-auditor-cta">
						<a href="#" class="btn btn-md btn-purple">Learn More</a>
					</div><!-- home-mobile-auditor-cta -->
				</div><!-- slant-left -->
				<div class="col-md-6 col-sm-12 ma-slant-right">
					<img src="<?php echo ROOT; ?>/assets/img/home/ipad-img.png" alt="" class="ma-slant-img">
				</div><!-- slant-right -->
			</div><!-- mobile-auditor-container -->
		</div><!-- slant -->
	</section><!-- mobile-auditor -->

	<section class="container-fluid management-console">
		<div class="slant purple-bg management-console-size">
			<div class="slant-content-wrapper management-content">
				<div class="home-switch-zero">
					<div class="col-md-6 col-sm-12 mc-slant-left">
						<img src="<?php echo ROOT; ?>/assets/img/home/mc-laptop.png" alt="" class="mc-slant-img">
					</div><!-- slant-left -->
					<div class="col-md-6 col-sm-12 mc-slant-right">
						<h3>Management Console</h3>
						<h4>Cover All The Bases. All The Time.</h4>
						<ul>
							<li>Create site audit forms that cover every compliance requirement you face</li>
							<li>Build customized assessment forms</li>
							<li>Push audit forms out to inspection teams</li>
							<li>Schedule audits and view audit schedules</li>				
						</ul>
						<div class="home-management-console-cta">
							<a href="#" class="btn btn-md btn-green">Learn More</a>
						</div><!-- home-management-console-cta -->
					</div><!-- slant-right -->
				</div><!-- home-switch-zero -->
				<div class="home-switch-one">
					<div class="col-md-6 col-sm-12 mc-slant-right">
						<h3>Management Console</h3>
						<h4>Cover All The Bases. All The Time.</h4>
						<ul>
							<li>Create site audit forms that cover every compliance requirement you face</li>
							<li>Build customized assessment forms</li>
							<li>Push audit forms out to inspection teams</li>
							<li>Schedule audits and view audit schedules</li>				
						</ul>
						<div class="home-management-console-cta">
							<a href="#" class="btn btn-md btn-green">Learn More</a>
						</div><!-- home-management-console-cta -->
					</div><!-- slant-right -->
					<div class="col-md-6 col-sm-12 mc-slant-left">
						<img src="<?php echo ROOT; ?>/assets/img/home/mc-laptop.png" alt="" class="mc-slant-img">
					</div><!-- slant-left -->
				</div><!-- home-switch-one -->
			</div><!-- management-console-wrapper -->
		</div><!-- slant -->
	</section><!-- mobile-auditor -->		
</section>	
	
<section id="system-features" class="container-fluid system-features-section purple-bg white-text wrap push">
	<div class="system-features">
		<div class="container system-features-wrapper">
			<h2>Check Out Our System Features</h2>
			<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-1" aria-expanded="false" aria-controls="collapseExample">
				<div class="box-feature" style="background-image: url(https://pbs.twimg.com/profile_images/817369685192605696/iWkgUdBf.jpg);"></div><!-- box-feature -->
				<div class="box-feature-header">
					<h5>Management Console</h5>
				</div><!-- box-feature-header -->
			</div><!-- box-feature -->
			<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-2" aria-expanded="false" aria-controls="collapseExample">
				<div class="box-feature" style="background-image: url(https://www.sideshowtoy.com/photo.php?sku=902622);"></div><!-- box-feature -->
				<div class="box-feature-header">
					<h5>Mobile Auditor</h5>
				</div><!-- box-feature-header -->
			</div><!-- box-feature -->
			<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-3" aria-expanded="false" aria-controls="collapseExample">
				<div class="box-feature" style="background-image: url(https://uproxx.files.wordpress.com/2017/03/spidermanhomecomingposter.jpg?quality=100&w=650);"></div><!-- box-feature -->
				<div class="box-feature-header">
					<h5>Automated Corrective Action</h5>
				</div><!-- box-feature-header -->
			</div><!-- box-feature -->
		</div><!-- system-feature-wrapper -->

		<!-- SECTION 3 COLLAPSED DATA -->
		<div class="container-fluid clear green-bg feature-drop">
			<div class="container">
				<div class="collapse pointer-position" id="home-box-feature-1">
					<div class="img-pointer sf-pointer-1"></div>
					<div class="feature-content">
						<h2>Home Feature 1!</h2>
						<p>This must be working! </p>
					</div><!-- home-box-feature-1 -->
				</div>
			</div><!-- container -->
		</div><!-- container-fluid -->
		<div class="container-fluid clear pink-bg feature-drop">
			<div class="container">
				<div class="collapse pointer-position" id="home-box-feature-2">
				<div class="img-pointer sf-pointer-2"></div>
					<div class="feature-content">
						<h2>Home Feature 2!</h2>
						<p>This must be working! </p>
					</div><!-- home-box-feature-1 -->
				</div>
			</div><!-- container -->
		</div><!-- container-fluid -->
		<div class="container-fluid clear blue-bg feature-drop">
			<div class="container">
				<div class="collapse pointer-position" id="home-box-feature-3">
				<div class="img-pointer sf-pointer-3"></div>
					<div class="feature-content">
						<h2>Home Feature 3!</h2>
						<p>This must be working! </p>
					</div><!-- home-box-feature-1 -->
				</div>
			</div><!-- container -->
		</div><!-- container-fluid -->

		<div class="container system-features-wrapper">
			<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-4" aria-expanded="false" aria-controls="collapseExample">
				<div class="box-feature" style="background-image: url(http://img.cinemablend.com/quill/b/e/e/0/e/f/bee0ef8beb8cc11ced998fc20ec49c128671dc1d.jpg);"></div><!-- box-feature -->
				<div class="box-feature-header">
					<h5>Business Intelligence Reporting</h5>
				</div><!-- box-feature-header -->
			</div><!-- box-feature -->
			<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-5" aria-expanded="false" aria-controls="collapseExample">
				<div class="box-feature" style="background-image: url(http://nerdist.com/wp-content/uploads/2016/05/20160506_nerdistnews_capexclusive_1x1.jpg);"></div><!-- box-feature -->
				<div class="box-feature-header">
					<h5>Bluetooth Thermocouple Integration</h5>
				</div><!-- box-feature-header -->
			</div><!-- box-feature -->
			<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-6" aria-expanded="false" aria-controls="collapseExample">
				<div class="box-feature" style="background-image: url(http://cdn.movieweb.com/img.news.tops/NEbZRNg3YX0cfc_1_b.jpg);"></div><!-- box-feature -->
				<div class="box-feature-header">
					<h5>Search Driven Analytics</h5>
				</div><!-- box-feature-header -->
			</div><!-- box-feature -->
		</div><!-- system-feature-wrapper -->

		<!-- SECTION 3 COLLAPSED DATA -->
		<div class="container-fluid clear green-bg feature-drop">
			<div class="container">
				<div class="collapse pointer-position" id="home-box-feature-4">
					<div class="img-pointer sf-pointer-1"></div>
					<div class="feature-content">
						<h2>Home Feature 4!</h2>
						<p>This must be working! </p>
					</div><!-- home-box-feature-1 -->
				</div>
			</div><!-- container -->
		</div><!-- container-fluid -->
		<div class="container-fluid clear pink-bg feature-drop">
			<div class="container">
				<div class="collapse pointer-position" id="home-box-feature-5">
				<div class="img-pointer sf-pointer-2"></div>
					<div class="feature-content">
						<h2>Home Feature 5!</h2>
						<p>This must be working! </p>
					</div><!-- home-box-feature-1 -->
				</div>
			</div><!-- container -->
		</div><!-- container-fluid -->
		<div class="container-fluid clear blue-bg feature-drop">
			<div class="container">
				<div class="collapse pointer-position" id="home-box-feature-6">
				<div class="img-pointer sf-pointer-3"></div>
					<div class="feature-content">
						<h2>Home Feature 6!</h2>
						<p>This must be working! </p>
					</div><!-- home-box-feature-1 -->
				</div>
			</div><!-- container -->
		</div><!-- container-fluid -->

	</div><!-- system-features -->
</section><!-- system-features-section -->
	
	
	

	<section class="container-fluid section-four wrap push">
		<div class="section-four-wrapper">
			<h2 class="green-text">Oh These Guys? They're Just Our Fan Club</h2>
			<div class="brag-time">
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/applebees.png" alt="Applebees" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/avendra.png" alt="Avendra" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/best-western.png" alt="Best Western" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/checkers.png" alt="Checkers and Rally's" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/chilies.png" alt="Chilies" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/cracker-barrel.png" alt="Cracker Barrel" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/dairy-queen.png" alt="Dairy Queen" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/firehouse-subs.png" alt="Firehouse Subs" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/friendlys.png" alt="Friendly's" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/g6.png" alt="G6" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/golden-corral.png" alt="Golden Corral" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/hard-rock.png" alt="Hard Rock" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/ihop.png" alt="IHop" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/longhorn-steakhouse.png" alt="Longhorn Steakhouse" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/macaroni-grill.png" alt="Macaroni Grill" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/marriott.png" alt="Marriott" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/mcdonalds.png" alt="Mcdonalds" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/olive-garden.png" alt="Olive Garden" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/papa-murphies.png" alt="Papa Murphy's" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/pollo-loco.png" alt="Pollo Loco" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/ritz-carlton.png" alt="The Ritz Carlton" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/sears.png" alt="Sears" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/starbucks.png" alt="Starbucks" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/staybrdige.png" alt="Stay Bridge" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/super-8.png" alt="Super 8" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/texas-roadhouse.png" alt="Texas Roadhouse" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/wendys.png" alt="Wendy's" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/winn-dixie.png" alt="Winn-Dixie" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/academy.png" alt="Academy" class="customerLogo-img"></div><!-- customer-logo -->
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/crowne-plaza.png" alt="Crowne Plaza" class="customerLogo-img"></div><!-- customer-logo -->
			</div><!--brag-time -->
			<div class="brag-btn-wrapper">
				<a href="#" class="btn btn-lg btn-green">Read Case Studies</a>
			</div><!-- brag-btn-wrapper -->
		</div><!-- section-four-wrapper -->
	</section><!-- section-four -->
			

	<section class="container-fluid section-five wrap push">
		<div class="container section-five-wrapper">
			<div class="home-circle-row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper">
					<div class="circle-icon purple-bg">
						<img src="<?php echo ROOT; ?>assets/img/icons/computer-icon-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- adv-icon -->
					<div class="circle-header">
						<h4>Gather Better</h4>
					</div><!-- adv-header -->
				</div><!-- adv-wrapper -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper">
					<div class="circle-icon pink-bg">
						<img src="<?php echo ROOT; ?>assets/img/icons/chart-time-icon-white.png" alt="See Earlier" class="circle-icon-img">
					</div><!-- adv-icon -->
					<div class="circle-header">
						<h4>See Earlier</h4>
					</div><!-- adv-header -->
				</div><!-- adv-wrapper -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper">
					<div class="circle-icon blue-bg">
						<img src="<?php echo ROOT; ?>assets/img/icons/rocket-icon-white.png" alt="Act Faster" class="circle-icon-img">
					</div><!-- adv-icon -->
					<div class="circle-header">
						<h4>Act Faster</h4>
					</div><!-- adv-header -->
				</div><!-- adv-wrapper -->
			</div><!-- circle-row -->
		</div><!-- section-5-wrapper -->
		<div class="container circle-content">
			<p>The RizePoint Mobile Auditor&reg; app and the cloud-based RizePoint Management Console team up to give you a single view into your compliance data. With this powerful brand, quality, and safety auditing system in your corner, you’ll gather better data, see issues earlier, and act to resolve those issues faster&ndash;before they affect your customers’ experiences.</p>
		</div><!-- cirlce-content -->
	</section>

<section class="container-fluid raq wrap push">
	<div class="container raq-wrapper">
		<div class="col-md-6 col-sm-12 req-left">
			<div class="req-title">
				<h2>Request a Free Demo</h2>
				<div class="raq-form">
					<span class="raq-disclaimer">*Fill out the form below to request a free demo</span>
					<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_486"></form>
					<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 486);</script>
				</div><!-- raq-form -->
			</div><!-- req-title -->
		</div><!-- req-left -->
		<div class="col-md-6 col-sm-12 req-right">
			<img src="<?php echo ROOT; ?>/assets/img/home/device-group.png" class="req-img" alt="">
		</div><!-- req-right -->
	</div><!-- request a demo wrapper -->
</section><!-- request a demo -->
	
<?php get_footer(); ?>