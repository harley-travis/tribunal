<?php 
/**
 * Template Name: Products
*/
get_header(); ?>
	<style>
		
		.banner-buttons{
			border: 1px white solid;
			border-radius: 5px;
			background:none;
			padding: 5px 15px 5px 15px;
			margin: 20px;
			
		}
		
		
		.request-icons {
			width: 100%;
			max-width: 1440px;
			margin: auto;
		}

		.circle-row {
			width: 100%;
			max-width: 930px;
			margin: 0 auto;
			padding: 100px 0px 100px 0px;
		}

		img {
			width: 100%;
		}
		
		.products-intro-copy{
			width: 100%;
			max-width: 930px;
			margin: 0 auto;
			text-align: center;
		}
		
		.grad-back{
			position: absolute;
			z-index: 5;
		}
		
		.container-banner{
			position:relative;
			z-index: 10;
			padding-bottom: 150px;
    		padding-top: 200px;
			
		}
		
		.title{
			padding: 250px !important;
		}
		
		.banner-wrapper{
			text-align:center;
			padding-bottom:15px;
			color:white;
		}
		
		.banner-wrapper-title{
			text-align:center;
			padding-bottom:15px;
			color:white;
		}
		
		.button{
			margin: 0 auto;
			padding: 5px 15px 5px 15px;
			margin: 20px;
			border-radius: 5px;
			border: none;
			color: white;
			text-align: center;
		}
		
		.button-pos {
			text-align: center;
			margin-top: 40px
			
		}
		
		.management-console{
			padding-top:50px;
		}
		
		.man-wrapper{
			width: 100%;
			max-width: 1050px;
    		padding: 15px 50px 15px 50px;
			margin: auto;
		}
		
		.man-img {
			padding-right: 90px;
		}
		
		.man-img2 {
			padding-left: 90px;
		}
		
		.man-text h2{
			
			
		}
		
		.man-text2 h2{
			
		}
		
		.aud-wrapper{
			width: 100%;
			max-width: 1080px;
    		padding: 15px 50px 15px 50px;
			margin: auto;
		}
		
		.aud-img {
			padding-right: 90px;
		}
		
		.aud-img2 {
			padding-left: 90px;
		}
		
		.aud-text h2{
			
			
		}
		
		.aud-text2 h2{
			
		}
		
		.man-content{
			padding-top:40px;
			padding-bottom:40px;
			
		}
		
		.man-content2{
			background: lightGray-bg;
			padding-top:40px;
			padding-bottom:40px;
		}
		
		.aud-content {
			padding-top:40px;
			padding-bottom:40px;
			
		}
		
		.aud-content2{
			padding-top:40px;
			padding-bottom:40px;
		}
		
		.aud-vid{
			margin: auto;
			text-align: center;
			padding-bottom: 110px;
		}
		
		@media only screen and (max-width: 2560px){
			.container-banner{
				position:relative;
				z-index: 10;
				padding-bottom: 285px;
				padding-top: 300px;
		
				}
		}
		
		@media only screen and (max-width: 1440px){
			.container-banner{
				position:relative;
				z-index: 10;
				margin-top: -80px;
				
		
				}
		}
		
		@media only screen and (max-width: 768px){
			.container-banner{
				position:relative;
				z-index: 10;
				margin-top: -190px;
				margin-bottom:-180px;
		
				}
			
			.banner-wrapper-title{
				margin-top: -120px;
				margin-bottom: -120px;
				
			}
			.container-banner{
				position:relative;
				z-index: 10;
				margin-bottom:0px;
				margin-top:0px;
				padding-bottom: 85px;
		
				}
		}
		
		@media only screen and (max-width: 425px){
			.circle-row{
				padding: 10px 0px 10px 0px
			}
			
			.banner-wrapper-title{
				margin-top: -120px;
				margin-bottom: -120px;
				
			}
			
			
			.container-banner{
				position:relative;
				z-index: 10;
				margin-top: -195px;
				margin-bottom: 0px;
				padding-bottom: 0px;
		
				}
			
			.banner-wrapper{
				margin-top: -75px;
			}
			
			.management-console{
				padding-top: 10px;
				padding-bottom: 0px;
				margin-bottom: -37px;
				
			}
			
			.man-img{
				padding-right: 0px;
			}
			
			.man-img2{
				padding-left: 0px;
			}
			
			.aud-img2{
				padding-left: 0px;
			}
			
			.aud-img{
				padding-right: 0px;
			}
			
			.aud-vid{
				display: none;
				
			}
		}
		@media only screen and (max-width: 375px){
			.circle-row{
				padding: 10px 0px 10px 0px
			}
			
			.banner-wrapper-title{
				margin-top: -120px;
				margin-bottom: -120px;
				
			}
			
			
			.container-banner{
				position:relative;
				z-index: 10;
				margin-top: -195px;
				margin-bottom: 0px;
				padding-bottom: 0px;
		
				}
			
			.banner-wrapper{
				margin-top: -100px;
				
			}
			.banner-wrapper h1 {
				font-size:30px;
			}
			
			.management-console{
				padding-top: 10px;
				padding-bottom: 0px;
				margin-bottom: -37px;
				
			}
			
			.man-img{
				padding-right: 0px;
			}
			
			.man-img2{
				padding-left: 0px;
			}
			
			.aud-img2{
				padding-left: 0px;
			}
			
			.aud-img{
				padding-right: 0px;
			}
			
			.aud-vid{
				display: none;
				max-width: 400px;
			}
		}
		
	
		
	
	</style>

	
	
	<div class="container-fluid pink-yellow">
		<header class="wrap push">
		<?php get_template_part('includes/page-header'); ?>
		<div class="container header-wrapper">
			<div class="container banner wrap push">
				<div class="banner-wrapper">
					<h1>Products</h1>
					<div class="banner-btns">
						<button type="button" class="btn btn-lg btn-width btn-inverse-white orange-text" data-toggle="modal" data-target="#homeVideo">Watch Video</button> <a href="#" class="btn btn-lg btn-width btn-inverse-white">Free Demo</a>
					</div><!-- banner-btns -->
				</div><!-- banner-wrapper -->
			</div><!-- banner -->
		</div><!-- container-fluid -->
		</div>
		</header>
	</div>


<div class="content-wrapper">
	<div class="request-icons">
		<div class="row circle-row">

			<div class="col-md-4 col-sm-4 col-xs-12 circle-wrapper">
				<div class="circle-icon orangeOne-bg">
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
				<div class="circle-icon pink-bg">
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
				<div class="circle-icon purple-bg">
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


<div class="container-fluid products-intro-copy">
	<p>The RizePoint Mobile Auditor&reg; app and the cloudbased RizePoint Management Console team up to give you a single view into your compliance data. With this powerful brand, quality, and safety auditing system in your corner, you'll gather better data, see issuses earlier, and act to resolve those issues faster- before they affect your customers' experiences.</p>
</div><!--products-intro-copy-->

<div class="button-pos">
	<button class="button btn-green">Download Datasheet</button>
</div><!--button-pos-->

<div class="container-fluid management-console">
<div class="container-fluid">
	<div class="grad-back">
		<img src="<?php echo ROOT; ?>assets/img/gradients/green-teal-decal.png">
	</div><!--div-grad-->

		<div class="container-banner">
			<div class="banner-wrapper">
			<h1>Management Console</h1>
				<button class="banner-buttons">Download Datasheet</button>
				
			</div><!-- banner-wrapper -->
		</div><!-- banner -->
	</div><!-- container-fluid -->
</div><!--management-console-->

<div class="container-fluid man-content">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 man-img">
				<img src="<?php echo ROOT; ?>assets/img/software/auditor.png">
			</div>
				
			<div class="col-md-7 col-sm-6 col-xs-12 man-text">
				<h2 class="man-text green-text">Cover All The Bases, Everytime.</h2>
				<p>Create site audit forms that cover every compliance requirement you face.<br>Build customized assessment forms. Push audit forms out to inspection teams. Schedule audits and view audit schedules.
				</p>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content2 extraGray-bg">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 man-text2">
				<h2 class="man-text green-text">Cover All The Bases, Everytime.</h2>
				<p>Correct negative assessment results immediately with automated corrective action tasks.<br>Assign corrective action tasks. Issue notifications, alerts and reminders. Monitor action plan completion.
				</p>
			</div>
			
			<div class="col-md-5 col-sm-6 col-xs-12 man-img2">
				<img src="<?php echo ROOT; ?>assets/img/software/cam-dashboard.png">
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="container-fluid man-content">
	<div class="man-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 man-img">
				<img src="<?php echo ROOT; ?>assets/img/software/scoring.png">
			</div>
			
			<div class="col-md-7 col-sm-6 col-xs-12 man-text">
				<h2 class="man-text green-text">The Right Data, To All The Right People.</h2>
				<p>Shar business intelligence acrosss your entire organization.<br> Use management dashboards to view top-level details. Drill down to specific data points. View reporting wherever, whenever.
				</p>
			</div>
		</div><!--row-->
	</div><!--man-wrapper-->
</div><!--man-content-->

<div class="button-pos">
	<button class="button btn-green">Download Datasheet</button>
	<button class="button btn-green">Request A Demo</button>
</div><!--button-pos-->


<div class="container-fluid management-console">
<div class="container-fluid">
	<div class="grad-back">
		<img src="<?php echo ROOT; ?>assets/img/gradients/pink-orange-decal.png">
	</div><!--div-grad-->

		<div class="container-banner">
			<div class="banner-wrapper">
			<h1>Mobile Auditor</h1>
				<button class="banner-buttons btn-green">Download Datasheet</button>
				
			</div><!-- banner-wrapper -->
		</div><!-- banner -->
	</div><!-- container-fluid -->
</div><!--management-console-->

<div class="aud-vid orangeOne-text">
<h2>Bluetooth Thermocouple Intgration</h2>
	<iframe width="640" height="480" src="https://www.youtube.com/embed/D9smvW50xEI" frameborder="0" allowfullscreen></iframe>
</div><!--aud-vid-->

<div class="container-fluid aud-content2 extraGray-bg">
	<div class="aud-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 aud-img">
				<img src="<?php echo ROOT; ?>assets/img/software/auditor.png">
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
	<div class="button-pos">
		<button class="button btn-orange">Download Datasheet</button>
		<button class="button btn-orange">Request A Demo</button>
	</div><!--button-pos-->	
</div><!--man-content-->


<?php get_footer(); ?>

