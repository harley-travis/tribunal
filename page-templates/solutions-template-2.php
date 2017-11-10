<?php 
/**
 * Template Name: Solutions | Template 2
*/
get_header(); ?>

<style>

	.it-content-sec2 img {
		max-width: 200px;
	}
	
	.res-button{
		padding-top: 50px;	
	}

</style>

<div class="container-fluid <?php the_field('banner_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('banner_button_path'); ?>" class="btn btn-lg btn-width btn-inverse-white"><?php the_field('banner_button_title'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<!-- banner video -->
<div class="modal fade" id="banner-video" tabindex="-1" role="dialog" aria-labelledby="banner-videoLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title heading-4" id="banner-videoLabel">See How RizePoint Can Help The Food Industry</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/in3fdjpcii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_in3fdjpcii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<button type="button" href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</button>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->


	<div class="container-fluid wrap push">
		<div class="container it-content-sec1">
			<?php the_field('image_1'); ?>
			<?php the_field('content_1'); ?>
		</div>
	</div>

	<div class="container-fluid lightGray-bg wrap push">
		<div class="container it-content-sec2">
			<img src="<?php the_field('image_2'); ?>">
			<?php the_field('content_2'); ?>
		</div>
	</div>


<section class="container-fluid wrap push">
	<div class="container it-content-sec2">
		<h2 class="purple-text heading-2"><?php the_field('datasheet_section_heading'); ?></h2>
		
		
	<div class="res-button">
		<a href="<?php echo ROOT_URL; ?><?php the_field('button_path'); ?>" class="btn btn-lg btn-green" target="_blank"><?php the_field('button_title'); ?></a>
	</div><!--res-button-->
		
		
	</div><!-- case-sheets-wrapper -->
</section><!-- case-sheets -->


<section class="container-fluid green-bg wrap push">
	<div class="container raq-wrapper">
		<div class="col-md-6 col-sm-12 req-left">
			<div class="req-title">
				<h2 class="heading-2">Request a Free Demo</h2>
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









