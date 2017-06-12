<?php
/**
 * Template Name: What We Do
 */
get_header(); ?>
<style>
	.do-intro{
		padding-top: 100px;
		padding-bottom: 200px;
	}
	
	.circle-row{
		padding-top: 130px;
	}
	
		.aud-vid{
		    margin: auto;
			text-align: center;
			padding-bottom: 110px;
			padding-left: 50px;
			padding-right: 50px;
			width: 100%;
			max-width: 1200px;
	}
	
	.do-clients-title{
		    text-align: center;
			padding-bottom: 30px;
			padding-top:80px;
	}

	@media only screen and (max-width: 1024px){
		.do-intro{
			padding-top: 40px;
			padding-bottom: 50px;
		}
		
		.do-clients-title{
			padding-top: 1px;
		}
		
		.button-pos{
			padding-bottom: 50px;
		}
	}
	
	@media only screen and (max-width: 1024px){
		.do-intro{
			padding-bottom:1px;
		}
	}
</style>

<div class="container-fluid purple-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>What We Do</h1>
			<div class="banner-btns">
				<button type="button" class="btn btn-lg btn-width btn-inverse-white orange-text" data-toggle="modal" data-target="#banner-video">Management Console</button> <a href="#" class="btn btn-lg btn-width btn-inverse-white">Mobile Auditor</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->


<div class="container-fluid">
	<div class="container do-text">
		<div class="do-intro">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula urna erat, in accumsan nunc tincidunt vel. Integer vitae auctor nibh. Mauris rhoncus elit sed augue bibendum pharetra. Fusce vitae eleifend dolor, in faucibus odio. Phasellus congue pharetra tristique. Nam aliquam est enim, non sagittis felis ornare et. Duis dignissim at orci vel facilisis. Duis et metus mollis, pellentesque felis vitae, finibus enim.
			</p>
			
			<div class="button-pos">
				<button class="button btn-green">Download Datasheet</button>
			</div><!--button-pos-->

		</div><!--do-text-->
	</div><!--do-intro-->
</div><!--container-fluid-->


<section id="system-features" class="container-fluid slant-wrapper wrap push">	
	<section class="solutions-system-features-wrapper">
		<div class="slant purple-bg solutions-features-size">
			<div class="slant-content-wrap">
				<div class="system-features solutions-system-features">
					<div class="container system-features-wrapper">
						<h2>System Features</h2>
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
			</div><!-- mobile-auditor-container -->
		</div><!-- solutions-features-size -->
	</section><!-- solutions-system-features-wrapper -->
</section><!-- slant-wrapper -->




<div class="content-wrapper">
	<div class="request-icons">
		<div class="row circle-row">

			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon purple-bg">
					<img src="<?php echo ROOT; ?>assets/img/icons/computer-icon-white.png" class="circle-icon-img"></img>
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>Gather Better</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->

		


			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon orangeTwo-bg">
					<img src="<?php echo ROOT; ?>assets/img/icons/chart-time-icon-white.png" class="circle-icon-img"></img>
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>See Earlier</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->

		


			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon green-bg">
					<img src="<?php echo ROOT; ?>assets/img/icons/rocket-icon-white.png" class="circle-icon-img"></img>
					
				</div><!--circle-icon-->
				<div class="circle-header">
					<h4>Act Faster</h4>
				</div><!--circle-header-->
				<div class="circle-text">
					<p></p>
				</div><!--circle-text-->
			</div><!--circle-wrapper-->
		</div><!--row circle-row-->
		
	</div><!--request-icons-->
</div><!--row-->



<div class="aud-vid orangeOne-text">
<h2>Bluetooth Thermocouple Intgration</h2>
	<script src="https://fast.wistia.com/embed/medias/wmvwv72z9m.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_wmvwv72z9m videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
</div><!--aud-vid-->




<div class="container-fluid aud-content2 extraGray-bg">
	<div class="aud-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 aud-img">
				<img src="<?php echo ROOT; ?>assets/img/software/cam-dashboard.png">
			</div>
				
			<div class="col-md-7 col-sm-6 col-xs-12 aud-text">
				<h2 class="aud-text orangeOne-text">Cover All The Bases, Everytime.</h2>
				<p>Create site audit forms that cover every compliance requirement you face.<br>Build customized assessment forms. Push audit forms out to inspection teams. Schedule audits and view audit schedules.
				</p>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid aud-content">
	<div class="aud-wrapper">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 aud-text2">
				<h2 class="aud-text2 orangeOne-text">Cover All The Bases, Everytime.</h2>
				<p>Correct negative assessment results immediately with automated corrective action tasks.<br>Assign corrective action tasks. Issue notifications, alerts and reminders. Monitor action plan completion.
				</p>
			</div>
			
			<div class="col-md-5 col-sm-6 col-xs-12 aud-img2">
				<img src="<?php echo ROOT; ?>assets/img/software/cam-dashboard.png">
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid aud-content2 extraGray-bg">
	<div class="aud-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 aud-img">
				<img src="<?php echo ROOT; ?>assets/img/software/scoring.png">
			</div>
			
			<div class="col-md-7 col-sm-6 col-xs-12 aud-text">
				<h2 class="aud-text orangeOne-text">The Right Data, To All The Right People.</h2>
				<p>Shar business intelligence acrosss your entire organization.<br> Use management dashboards to view top-level details. Drill down to specific data points. View reporting wherever, whenever.
				</p>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
	
</div><!--man-content-->

<div class="do-clients-title">
	<h3>Some Of Our Clients</h3>
</div><!--do-clients-title-->

<div class="container-fluid">
	<div class="container do-clients">
		<div class="do-clients-title">
			
		</div><!--do-clients-title-->
		<div class="do-logo">
			<div class="col-md-4 col-sm-12 col-xs-12 do-client-img">
				<img src="<?php echo ROOT; ?>assets/img/clients/ritz-carlton.png">
			</div><!--do-client-img-->
			<div class="col-md-4 col-sm-12 col-xs-12 do-client-img">
				<img src="<?php echo ROOT; ?>assets/img/clients/chilies.png">
			</div><!--do-client-img-->
			<div class="col-md-4 col-sm-12 col-xs-12 do-client-img">
				<img src="<?php echo ROOT; ?>assets/img/clients/hard-rock.png">
			</div><!--do-client-img-->
			
		</div><!--do-logo-->
	</div><!--do-clients-->
</div><!--container-fluid-->

<div class="container-fluid">
	<div class="container do-clients">
		<div class="do-clients-title">
			
		</div><!--do-clients-title-->
		<div class="do-logo">
			<div class="col-md-4 col-sm-12 col-xs-12 do-client-img">
				<img src="<?php echo ROOT; ?>assets/img/clients/ritz-carlton.png">
			</div><!--do-client-img-->
			<div class="col-md-4 col-sm-12 col-xs-12 do-client-img">
				<img src="<?php echo ROOT; ?>assets/img/clients/chilies.png">
			</div><!--do-client-img-->
			<div class="col-md-4 col-sm-12 col-xs-12 do-client-img">
				<img src="<?php echo ROOT; ?>assets/img/clients/hard-rock.png">
			</div><!--do-client-img-->
			
		</div><!--do-logo-->
	</div><!--do-clients-->
</div><!--container-fluid-->


	<div class="button-pos">
		<button class="button btn-orange">Download Datasheet</button>
		<button class="button btn-orange">Request A Demo</button>
	</div><!--button-pos-->	


<?php get_footer(); ?>
