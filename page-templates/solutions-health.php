<?php 
/**
 * Template Name: Solutions | health-departments
*/
get_header(); ?>

<div class="container-fluid green-blue-purple">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">State Departments of Health</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-width btn-inverse-white">Free Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container it-content-sec1">
		<h3 class="heading-3">Reduce Backlogs. Eliminate Errors. Address Findings.</h3>
			<p>
			Frequent, consistent, and reliable inspections are the cornerstone of any health department in charge of protecting their community against foodborne illnesses and other risks. However, everyday realities such as inspectors stretched thin, busy management teams, and piles of paperwork get in the way of conducting evaluations. And, when it comes to sharing findings, it’s even more difficult to compile scattered pieces of data into clear, comprehensive reports for review. With challenges like these, it’s easy to understand why audits are often overdue or not in compliance with statutes.
		</p>
	</div><!--it-content-->
</div><!--container-fluid-->

<div class="container-fluid purple-bg wrap push">
	<div class="container it-content-sec2 white-text">
			<h3 class="heading-3">
				RizePoint has facilitated site inspections for health departments and top private sector brands for nearly 20 years to:
			</h3>
			<ul>
				<li>Save time and visit more locations using efficient inspection tools and processes</li>
				<li>Gather inspection data digitally and immediately upload audit results</li>
				<li>Track Inspector activities and validate audits are completed</li>
				<li>Provide clear, concise audit result reports with little effort</li>
				<li>Prepare for future regulatory requirements</li>
				<li>Conduct inspections using forms and processes that mirror statutes</li>
			</ul>
		
	</div><!--it-content-->
</div><!--container-fluid-->

<div class="container-fluid lightGray-bg wrap push">
	<div class="container it-content-sec3 ">
		<div class="wp-title purple-text">
			<h2 class="heading-2">Datasheets &amp; White Papers</h2>
		</div><!--wp-title-->
			<div class="col-md-6 col-sm-12 col-xs-12 ">
				<a href="https://rizepoint.com/wp-content/uploads/2017/04/health-dept-datasheet-2017.pdf" target="_blank">
						<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-overview-min.jpg" class="case-box-img" alt="">
							<h4 class="heading-4">Overview Datasheet for Health Departments</h4>
					</a>	
			</div><!--col-->

			<div class="col-md-6 col-sm-12 col-xs-12">
				<a href="https://rizepoint.com/wp-content/uploads/2017/04/Reduce-Audit-Fatigue-Govt-WP-2017.pdf" target="_blank">
						<img src="<?php echo ROOT; ?>/assets/img/datasheets/reduce-audit-fatigue-thumbnail-2017.jpg" class="case-box-img" alt="">
							<h4 class="heading-4">White Paper: Audit Fatigue</h4>
					</a>	
			</div><!--col-->

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
