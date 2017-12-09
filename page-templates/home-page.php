<?php 
/**
 * Template Name: Home page 
*/

get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<?php the_content('[...]'); ?> 
<?php endwhile; ?>


<div class="container-fluid orange-pink-purple">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="home-banner-wrapper">
			<h1 class="heading-1">The Industry Standard Platform For Brand, Quality &amp; Safety Compliance</h1>
			<div class="banner-btns">
				<button type="button" class="btn btn-lg btn-width btn-white orange-text" data-toggle="modal" data-target="#homeVideo">Watch a Video</button> <a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-width btn-inverse-white">Request a Demo</a>
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
				<h4 class="modal-title heading-4" id="homeVideoLabel">Allow Us To Introduce Ourselves</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/in3fdjpcii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_in3fdjpcii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->
			
<section id="industry-target" class="container-fluid home-intro wrap push">
	<div class="container home-intro-wrapper">
		<div class="home-intro-top">
			<h2 class="green-text heading-2">RizePoint software manages the quality process from audits to automated corrective action.</h2>
		</div><!-- row -->
		
		<div class="home-switch-zero">
			<div class="circle-row">
			<h3>Click on your industry to see how RizePoint is helping companies like you</h3>
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle purple-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-1" aria-expanded="false">
						<img src="<?php echo ROOT; ?>assets/img/icons/food-service-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4 class="heading-4">Food</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle pink-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-2" aria-expanded="false" >
						<img src="<?php echo ROOT; ?>assets/img/icons/hospitality-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4 class="heading-4">Hospitality</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle orangeTwo-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-3" aria-expanded="false">
						<img src="<?php echo ROOT; ?>assets/img/icons/retail-white.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4 class="heading-4">Retail</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
					<div class="circle-icon industry-circle green-bg box-shadow" role="button" data-toggle="collapse" data-parent="#industry-target" data-target="#industry-feature-4" aria-expanded="false">
						<img src="<?php echo ROOT; ?>assets/img/home/new-icons-hammer-min.png" alt="Gather Better" class="circle-icon-img">
					</div><!-- purple-bg -->
					<div class="circle-header">
						<h4 class="heading-4">Other</h4>
					</div><!-- circle-header -->
				</div><!-- circle-wrapper -->
			</div><!-- circle-row -->
		</div><!-- home-switch-zero -->
		
		<div class="home-switch-one">
			<div class="circle-row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-1">
					<a href="<?php echo ROOT_URL; ?>/solutions-food-service/">
						<div class="circle-icon industry-circle purple-bg box-shadow">
							<img src="<?php echo ROOT; ?>assets/img/icons/food-service-white.png" alt="Gather Better" class="circle-icon-img">
						</div><!-- purple-bg -->
						<div class="circle-header">
							<h4 class="heading-4">Food</h4>
						</div><!-- circle-header -->
					</a>
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-2">
					<a href="<?php echo ROOT_URL; ?>/solutions-hospitality/">
						<div class="circle-icon industry-circle pink-bg box-shadow">
							<img src="<?php echo ROOT; ?>assets/img/icons/hospitality-white.png" alt="Gather Better" class="circle-icon-img">
						</div><!-- purple-bg -->
						<div class="circle-header">
							<h4 class="heading-4">Hospitality</h4>
						</div><!-- circle-header -->
					</a>
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-3">
					<a href="<?php echo ROOT_URL; ?>/solutions-retail/">
						<div class="circle-icon industry-circle orangeTwo-bg box-shadow">
							<img src="<?php echo ROOT; ?>assets/img/icons/retail-white.png" alt="Gather Better" class="circle-icon-img">
						</div><!-- purple-bg -->
						<div class="circle-header">
							<h4 class="heading-4">Retail</h4>
						</div><!-- circle-header -->
					</a>
				</div><!-- circle-wrapper -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper" data-toggle="modal" data-target="#industry-btn-4">
					<a href="<?php echo ROOT_URL; ?>/solutions-other/">
						<div class="circle-icon industry-circle green-bg box-shadow">
							<img src="<?php echo ROOT; ?>assets/img/home/new-icons-hammer-min.png" alt="Gather Better" class="circle-icon-img">
						</div><!-- purple-bg -->
						<div class="circle-header">
							<h4 class="heading-4">Other</h4>
						</div><!-- circle-header -->
					</a>
				</div><!-- circle-wrapper -->
			</div><!-- circle-row -->
		</div><!-- home-switch-one -->		
	</div><!-- home-intro-wrapper -->

	<!-- INDUSTRIES CONTENTS -->
	<div class="collapse purple-bg container-fluid" id="industry-feature-1">
		<div class="feature-container">
			<div class="img-pointer pointer-1"></div>
			<h2 class="heading-2">Help Us Help You | Food Industry</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/ns55p7zhie.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_ns55p7zhie videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="<?php echo ROOT_URL; ?>/solutions-food-service" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
	<div class="collapse pink-bg container-fluid" id="industry-feature-2">
		<div class="feature-container">
		<div class="img-pointer pointer-2"></div>
			<h2 class="heading-2">Help Us Help You | Hospitality</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/gd2dapdwyk.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_gd2dapdwyk videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="<?php echo ROOT_URL; ?>/solutions-hospitality" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
	<div class="collapse orangeTwo-bg container-fluid" id="industry-feature-3">
		<div class="feature-container">
		<div class="img-pointer pointer-3"></div>
			<h2 class="heading-2">Help Us Help You | Retail</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/isliwkp1zb.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_isliwkp1zb videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="<?php echo ROOT_URL; ?>/solutions-retail" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
	<div class="collapse green-bg container-fluid" id="industry-feature-4">
		<div class="feature-container">
		<div class="img-pointer pointer-4"></div>
			<h2 class="heading-2">Help Us Help You | Other</h2>
			<div class="feature-video-demo">
				<script src="https://fast.wistia.com/embed/medias/s5qan08x3q.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_s5qan08x3q videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- feature-video-demo -->
			<div class="feature-btns">
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fl">
					<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Request A Demo</a>
				</div><!-- feature-btn-wrapper -->
				<div class="col-md-6 col-sm-12 feature-btn-wrapper fr">
					<a href="<?php echo ROOT_URL; ?>/solutions-other" class="btn btn-lg btn-inverse-white">Learn More</a>
				</div><!-- feature-btn-wrapper -->
			</div><!-- feature-btns -->
		</div><!-- home-box-feature-1 -->
	</div>
</section><!-- home-intro -->

<section class="container-fluid bx-section lightGray-bg wrap push">
	<div class="container bx-section-wrapper">
		<h2 class="green-text heading-2">Introducing The RizePoint Brand Experience Platform.</h2>
		<h3 class="green-text heading-3">Unify voice of quality, customer, and employee for intelligence that matters.</h3>
	</div><!-- bx-section-wrapper -->
	<div class="container bx-img-wrapper">
		<img src="<?php echo ROOT; ?>assets/img/logo/bx/rizepoint-bx-logo.png" alt="" class="bx-img">
	</div><!-- bx-img-wrapper -->
	<div class="bx-btn-wrapper">
		<a href="<?php echo ROOT_URL; ?>/brand-experience/?utm_source=rphomepage&utm_medium=button" class="btn btn-lg btn-green">Learn More</a>
	</div><!-- bx-btn-wrapper -->
</section><!-- bx-section -->

<section class="container-fluid home-section-two wrap push">
	<div class="container home-section-two-wrapper">
		<h2 class="green-text heading-2">Empowering You To Build A High Performance Organization</h2>
		<p>RizePoint software clearly aligns and unifies field teams, regional management, and executive leadership around the organization's compliance performance. Our customers gather better data, see necessary actions earlier, and act faster to correct issues before they become costly liabilities.</p>
		<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
			<div class="circle-icon em-icon">
				<img src="<?php echo ROOT; ?>assets/img/home/chat3.png" alt="Gather Better" class="circle-icon-img">
			</div><!-- purple-bg -->
			<div class="circle-header">
				<h4 class="heading-4">Go beyond checklists.</h4>
			</div><!-- circle-header -->
		</div><!-- circle-wrapper -->
		<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
			<div class="circle-icon  em-icon">
				<img src="<?php echo ROOT; ?>assets/img/home/vision3.png" alt="Gather Better" class="circle-icon-img">
			</div><!-- purple-bg -->
			<div class="circle-header">
				<h4 class="heading-4">No crystal ball necessary.</h4>
			</div><!-- circle-header -->
		</div><!-- circle-wrapper -->
		<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
			<div class="circle-icon  em-icon">
				<img src="<?php echo ROOT; ?>assets/img/home/Efficiency black-01.png" alt="Gather Better" class="circle-icon-img">
			</div><!-- purple-bg -->
			<div class="circle-header">
				<h4 class="heading-4">The right action right away.</h4>
			</div><!-- circle-header -->
		</div><!-- circle-wrapper -->
		<div class="col-lg-3 col-md-6 col-sm-6 col-sm-12 circle-wrapper">
			<div class="circle-icon em-icon">
				<img src="<?php echo ROOT; ?>assets/img/icons/minified-small/checkmark-black.png" alt="Gather Better" class="circle-icon-img">
			</div><!-- purple-bg -->
			<div class="circle-header">
				<h4 class="heading-4">Count on consistency.</h4>
			</div><!-- circle-header -->
		</div><!-- circle-wrapper -->
	</div><!-- home-section-two-wrapper -->
</section><!-- home-section-two -->
		
<section class="slant-wrapper wrap push">	
	<section class="container-fluid mobile-auditor">
		<div class="slant green-bg mobile-auditor-size">
			<div class="slant-content-wrapper">
				<div class="col-md-6 col-sm-12 ma-slant-left">
					<h3 class="heading-3">Mobile Auditor</h3>
					<h4 class="heading-4">From First Look to Final Report. Fast.</h4>
					<p>
						Easy, efficient inspections anywhere, any time.<br>
						Your field teams can audit faster, easier, and more accurately with RizePoint Mobile Auditor&reg;. Conduct audits on a smartphone, tablet, or laptop, then instantly upload results for immediate feedback. With features like video and photo annotation, offline access, and step-by-step navigation built into the quality management software, you’ll get the information you need to proactively protect quality across your organization.
					</p>
					<div class="home-mobile-auditor-cta">
						<a href="<?php echo ROOT_URL; ?>/products#ma" class="btn btn-md btn-purple">Learn More</a>
					</div><!-- home-mobile-auditor-cta -->
				</div><!-- slant-left -->
				<div class="col-md-6 col-sm-12 ma-slant-right">
					<img src="<?php echo ROOT; ?>/assets/img/home/ipad-console-min.png" alt="" class="ma-slant-img">
				</div><!-- slant-right -->
			</div><!-- mobile-auditor-container -->
		</div><!-- slant -->
	</section><!-- mobile-auditor -->

	<section class="container-fluid management-console">
		<div class="slant purple-bg management-console-size">
			<div class="slant-content-wrapper management-content">
				<div class="home-switch-zero">
					<div class="col-md-6 col-sm-12 mc-slant-left">
						<img src="<?php echo ROOT; ?>/assets/img/home/laptop-console-min.png" alt="" class="mc-slant-img">
					</div><!-- slant-left -->
					<div class="col-md-6 col-sm-12 mc-slant-right">
						<h3 class="heading-3">Management Console</h3>
						<h4 class="heading-4">Total Visibility. Totally Awesome.</h4>
						<p>
							Powerful, up-to-date management tools, automated corrective action, and business intelligence to drive your company forward.<br><br>
							Build custom forms and push updates to field teams immediately. Schedule audits, view results, then automate corrective actions using business workflows. Dashboards highlight key information from audits, and powerful search-driven analytics let you take business intelligence to a whole new level.
						</p>
						<div class="home-management-console-cta">
							<a href="<?php echo ROOT_URL; ?>/products#mc" class="btn btn-md btn-green">Learn More</a>
						</div><!-- home-management-console-cta -->
					</div><!-- slant-right -->
				</div><!-- home-switch-zero -->
				<div class="home-switch-one">
					<div class="col-md-6 col-sm-12 mc-slant-right">
						<h3 class="heading-3">Management Console</h3>
						<h4 class="heading-4">Cover All The Bases. All The Time.</h4>
						<ul>
							<li>Create site audit forms that cover every compliance requirement you face</li>
							<li>Build customized assessment forms</li>
							<li>Push audit forms out to inspection teams</li>
							<li>Schedule audits and view audit schedules</li>				
						</ul>
						<div class="home-management-console-cta">
							<a href="<?php echo ROOT_URL; ?>/products#ma" class="btn btn-md btn-green">Learn More</a>
						</div><!-- home-management-console-cta -->
					</div><!-- slant-right -->
					<div class="col-md-6 col-sm-12 mc-slant-left">
						<img src="<?php echo ROOT; ?>/assets/img/home/laptop-console-min.png" alt="" class="mc-slant-img">
					</div><!-- slant-left -->
				</div><!-- home-switch-one -->
			</div><!-- management-console-wrapper -->
		</div><!-- slant -->
	</section><!-- mobile-auditor -->		
</section>	
	
<section class="container-fluid section-four wrap push">
	<div class="section-four-wrapper" style="margin-top: 70px;">
		<h2 class="green-text heading-2">Trusted by the World’s Best Brands</h2>
			<?php include __DIR__ . "/../includes/client-logos.php"; ?>
		<div class="brag-btn-wrapper">
			<a href="<?php echo ROOT_URL; ?>/5299-2/" class="btn btn-lg btn-green">Read Case Studies</a>
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
					<h4 class="heading-4">Gather Better</h4>
				</div><!-- adv-header -->
			</div><!-- adv-wrapper -->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon pink-bg">
					<img src="<?php echo ROOT; ?>assets/img/icons/chart-time-icon-white.png" alt="See Earlier" class="circle-icon-img">
				</div><!-- adv-icon -->
				<div class="circle-header">
					<h4 class="heading-4">See Earlier</h4>
				</div><!-- adv-header -->
			</div><!-- adv-wrapper -->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon blue-bg">
					<img src="<?php echo ROOT; ?>assets/img/home/new-icons-switch-min3.png" alt="Act Faster" class="circle-icon-img">
				</div><!-- adv-icon -->
				<div class="circle-header">
					<h4 class="heading-4">Act Faster</h4>
				</div><!-- adv-header -->
			</div><!-- adv-wrapper -->
		</div><!-- circle-row -->
	</div><!-- section-5-wrapper -->
	<div class="container circle-content">
		<p>The RizePoint Brand Experience platform seamlessly integrates and correlates operational data with experiential data, providing end-to-end visibility into every aspect of your brand experience. By unifying the Voice of Quality with the Voice of Employee and the Voice of Customer, RizePoint uniquely closes the loop, creating a “single source of truth” for brand data. RizePoint Brand Experience amplifies visibility, accelerates corrective action, and uses collective intelligence to enhance every touchpoint consumers have with your brand.</p>
	</div><!-- cirlce-content -->
</section>

<section class="container-fluid green-bg wrap push">
	<div class="container raq-wrapper">
		<div class="col-md-6 col-sm-12 req-left">
			<div class="req-title">
				<h2 class="heading-2">Request a Free Demo</h2>
				<div class="raq-form">
					<span class="raq-disclaimer">*Fill out the form below to request a free demo</span>
					<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
					<form id="mktoForm_547"></form>
					<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 547);</script>
				</div><!-- raq-form -->
			</div><!-- req-title -->
		</div><!-- req-left -->
		<div class="col-md-6 col-sm-12 req-right">
			<img src="<?php echo ROOT; ?>/assets/img/home/device-group.png" class="req-img" alt="">
		</div><!-- req-right -->
	</div><!-- request a demo wrapper -->
</section><!-- request a demo -->


<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>
	
<?php get_footer(); ?>