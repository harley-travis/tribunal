<?php 
/**
 * Template Name: Solutions | IT
*/
get_header(); ?>

<div class="container-fluid green-blue-purple">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">Enabling IT to Drive Business Strategy</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Free Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container it-content-sec1">
			<p>
			IT professionals understand the importance of ensuring everyone in the organization has the information and tools necessary to do their jobs well. Become the hero of your organization by providing your quality and operations teams with an auditing solution that exceeds their expectations while giving your C-suite and others complete visibility into quality operations. Not only will your coworkers thank you for the efficient auditing and corrective action tools you’ve introduced, your executive team will applaud you for reporting that provides a thorough view of compliance across the entire organization. With RizePoint, your CEO will know, not just hope, that regulations and standards are upheld. And your quality teams will have the auditing tool required to drive compliance and continuous improvements in every location.
		</p>
	</div><!--it-content-->
</div><!--container-fluid-->

<div class="container-fluid purple-bg wrap push">
	<div class="container it-content-sec2 white-text">
			<h3 class="heading-3">
				Reasons IT Professionals Bring RizePoint to Their Organizations:
			</h3>
			<ul>
				<li>Critical quality data is easily captured using mobile devices, and fully available via a cloud-based portal</li>
				<li>Data is securely gathered, transmitted, and stored</li>
				<li>Advanced reporting capabilities give everyone in the company the compliance visibility they require, with little effort</li>
				<li>Easy-to-use auditing and corrective action tools keep the entire organization compliant and quickly adapt to meet unique needs</li>
				<li>Insightful data integrations are easily accomplished using the RizePoint API framework</li>
				<li>Helpful vendor support from RizePoint implementation and support teams who truly understand your needs</li>
			</ul>
		
	</div><!--it-content-->
</div><!--container-fluid-->

<div class="contianer-fluid lightGray-bg wrap push">
	<div class="container it-content-sec3 ">
		<div class="wp-title purple-text">
			<h2 class="heading-2">Datasheets &amp; White Papers</h2>
		</div><!--wp-title-->
			<div class="col-md-3 col-sm-6 col-xs-12 ds-content">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/overview-june-2017.pdf" target="_blank">
						<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-overview-min.jpg" class="case-box-img" alt="">
							<h4 class="heading-4">Overview Datasheet</h4>
					</a>	
			</div><!--col-->

			<div class="col-md-3 col-sm-6 col-xs-12 ds-content">
				<a href="https://rizepoint.com/wp-content/uploads/2017/10/RP_Datasheet-FullSolution.pdf" target="_blank">
						<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-solution-min.jpg" class="case-box-img" alt="">
							<h4 class="heading-4">Solutions Datasheet</h4>
					</a>	
			</div><!--col-->

			<div class="col-md-3 col-sm-6 col-xs-12 ds-content">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/business-intelligence-june-2017.pdf" target="_blank">
						<img src="<?php echo ROOT; ?>/assets/img/datasheets/business-intelligence-newlogo.jpg" class="case-box-img" alt="">
							<h4 class="heading-4">Business Intelligence</h4>
					</a>	
			</div><!--col-->

		<div class="col-md-3 col-sm-6 col-xs-12 white-paper">
			<a href="<?php echo ROOT_URL; ?>/it-ebook/" target="_blank">
						<img src="<?php echo ROOT; ?>/assets/img/white-papers/ITwpthumb-1-min.png" class="case-box-img" alt="">
							<h4 class="heading-4">IT As A Business Strategy Driver</h4>
					</a>
		</div><!--white-paper-->
			<div class="res-button">
				<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-green" target="_blank">Learn More</a>
			</div><!--res-button-->
		
	</div><!--container-->
</div><!--container-fluid-->

<section class="container-fluid green-bg wrap push">
	<div class="container raq-wrapper">
		<div class="col-md-6 col-sm-12 req-left">
			<div class="req-title">
				<h2 class="heading-2">Request a Free Demo</h2>
				<div class="raq-form">
					<span class="raq-disclaimer">*Fill out the form below to request a free demo</span>
					<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_218"></form>
						<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 218);</script>
						<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 81);</script>
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


<script>
	var Personas = {
		Init: function(){
			Personas.Widget.Banner.Init()
		},
		Widget: {
			Banner: {
				Init: function(){
					Personas.Widget.Banner.Sections.PersonaOne()
				},
				Reset: function(){
					$('.persona-info-wrapper').hide()
				},
				Swith: function(e){
					switch(e){
						case "persona-1":
							Personas.Widget.Banner.Sections.PersonaOne();
							break;
						case "persona-2":
							Personas.Widget.Banner.Sections.PersonaTwo();
							break;
						case "persona-3":
							Personas.Widget.Banner.Sections.PersonaThree();
							break;
						case "persona-4":
							Personas.Widget.Banner.Sections.PersonaFour();
							break;
						case "persona-5":
							Personas.Widget.Banner.Sections.PersonaFive();
							break;
						default:
							Personas.Widget.Banner.PersonaOne()
					}
				},
				Sections:{
					PersonaOne: function(){
						Personas.Widget.Banner.Reset(), $('#persona-1').show(), $('#persona-1-content').show()
					},
					PersonaTwo: function(){
						Personas.Widget.Banner.Reset(), $('#persona-2').show(), $('#persona-2-content').show()
					},
					PersonaThree: function(){
						Personas.Widget.Banner.Reset(), $('#persona-3').show(), $('#persona-3-content').show()
					},
					PersonaFour: function(){
						Personas.Widget.Banner.Reset(), $('#persona-4').show(), $('#persona-4-content').show()
					},
					PersonaFive: function(){
						Personas.Widget.Banner.Reset(), $('#persona-5').show(), $('#persona-5-content').show()
					}
				}
			}
		}
	}
	$(document).ready(function(){
		Personas.Init(), $('.personaBtn').click(function(e){
			Personas.Widget.Banner.Swith(e.currentTarget.id)
		})
	});
</script>
