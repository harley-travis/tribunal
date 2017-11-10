<?php
/**
 * Template Name: ROI Calculator
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<title><?php the_title('RizePoint | ')?></title>
		
		<?php require_once(dirname(__FILE__)."/../config.php"); ?>
		
		<!-- meta -->
		<meta charset="utf-8">
<!--		<meta name="description" content="Build a better brand experience with RizePoint enterprise compliance management. Improve risk and quality processes with quality management software—from audits to automated corrective action, with integrated business intelligence.">-->
		<meta name="keywords" content="Brand Experience, Quality Management Software, Risk management software, Corrective Action, Checklist app, Compliance Management, Audit Software, Auditing App, FSMA compliance, Safety and quality management">
		<meta name="author" content="RizePoint">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="theme-color" content="#FCB040" />
		
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/rangeslider.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/roi_style.css">
		
		 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/rangeslider.min.js"></script>
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-P5S234G');</script>
		<!-- End Google Tag Manager -->

		<script>
			// init big slide
			jQuery(document).ready(function() {
				jQuery('.menu-link').bigSlide();
			});
			
			// Hotjar Tracking Code for http://rizepoint.com 
			  (function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:298238,hjsv:5};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
			
		</script>	
		<!-- RTP tag --> 
		<script type='text/javascript'>
		(function(c,h,a,f,i,e){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
		 c[a].a=i;c[a].e=e;var g=h.createElement("script");g.async=true;g.type="text/javascript";
		 g.src=f+'?aid='+i;var b=h.getElementsByTagName("script")[0];b.parentNode.insertBefore(g,b);
		 })(window,document,"rtp","//abrtp1-cdn.marketo.com/rtp-api/v1/rtp.js","steton");

		rtp('send','view');
		rtp('get', 'campaign',true);
		</script>
		<!-- End of RTP tag -->
	
		<?php wp_head(); ?>
	</head>
	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5S234G"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<!-- google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-30261239-1', 'auto');
	  ga('send', 'pageview')
	</script>

<div class="container-fluid pink-purple">
		<?php include  __DIR__ . "/../includes/page-header.php"; ?>
		<div class="roi_wrapper wrap push">
			<div class="roi-spacing banner-wrapper">
				
				
	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>See how much you could save with RizePoint compliance software</h1><br>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					
					<div class="row">
						<div class="col-md-12">
							<div class="datawrap">
								<label>Number of locations in your company</label>
								<input id="locations" type="range" min="5" max="5000" value="1475">
							</div>
							<div class="datawrap">
								<label>Number of <i>local</i> audits or <i>self-assessments</i>, per location, per year</label>
								<input id="localaudits" type="range" min="1" max="400" value="56">
								</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-6">
							<div class="datawrap">
								<label>Average number of hours spent per <i>local</i> audit, or <i>self-assessment</i></label>
								<input id="hours" type="range" min="1" max="12" value="2">
							</div>
						</div>
						<div class="col-md-6">
							<div class="datawrap">
								<label id="corpaud">Number of <i>corporate</i> audits per location, per year</label>
								<input id="corporateaudits" type="range" min="1" max="24" value="5">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="datawrap">
								<label>Average number of hours spent per <i>corporate</i> audit</label>
								<input id="hoursc" type="range" min="1" max="50" value="9">
							</div>
						</div>
						<div class="col-md-6">
							<div class="datawrap">
								<label>Average hourly salary per auditor (USD)</label>
								<input id="salary" type="range" min="5" max="50" value="24">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-md-offset-1">
					<div id="whitebox" class="green-text">
						<h2>RizePoint Could Save You:</h1>
						<h4 id="savemoney">$<span>246,400</span> per year</h4>
						<h4 id="savehours"><span>24,640</span> hours per year</h4>
						<!--<hr class="rzhr">
						<h2>Using a manual process (without RizePoint), you waste:</h2>
						<h4 id="wastetime"><span>168</span> hours per year</h4>
						<h4 id="wastemoney">$<span>1,680</span> per year</h4><br><br>-->
						
						
						
						<hr class="rzhr">
						<span id="texttwo">
							Use the RizePoint ROI Calculator to estimate your potential savings after moving from a manual audit process to a mobile- and cloud-based solution.<br><br>
							<span>Learn more about how RizePoint is helping our customers save time, reduce risk, and increase consistency.</span><br><br><br>
						</span>
						<a class="learn-btn "href="https://rizepoint.com/rizepoint-roi-one-sheet/ " target="_blank">Learn More</a><br><br><br>
						<span class="roi-disclaimer">*Use of the ROI calculator tool is subject to a <a href="/roi-terms-conditions/" class="orangeOne-text">disclaimer</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
					</div>
	</div>
	</div>
				
				
	<div class="whitebg2" id="themath">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h3 id="textheaderone" class="green-text">The Math</h3>
					<p id="textone"><span id="slocations">80</span> locations with <span id="stotalaudits">112</span> audits, lasting <span id="shours">11</span> hours each on average. That's <span id="shourssaved">98,560</span> hours at $<span id="spay">10</span> per hour. RizePoint has been able to reduce auditing time by 25% — a savings of $<span id="smoneysaved">246,400</span> per year.</p>
					<a href="/roi-terms-conditions/" class="orangeOne-text">* ROI Calculator Disclaimer</a>
				</div>
			</div>
		</div>
	</div>


	<script src="<?php bloginfo('template_directory'); ?>/assets/js/roi.js"></script>
<?php get_footer(); ?>















