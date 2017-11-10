<?php 
/**
 * Template Name: Solutions | Template
*/
get_header(); ?>

<style>
.rad-solutions,
.solutions-system-features {
    color: $white;
}
.slant-wrapper .solutions-features-size:after,
.slant-wrapper .solutions-testimony-size:after {
    position: absolute;
    top: -6px;
    z-index: -1;
    box-shadow: 0 -8px 8px 0 rgba(0, 0, 0, .05), 0 -12px 28px 0 rgba(0, 0, 0, .05);
    display: block;
    content: '';
    left: 0;
    right: 0;
}
.solutions-section-one-wrapper {
    padding: 50px 0;
}
.solutions-section-one-wrapper h2 {
    padding-bottom: 35px;
    text-align: center;
}
.persona-list {
    padding-bottom: 50px;
}
.persona-image {
    cursor: pointer;
    text-align: center;
}
.persona-cta-btn {
    padding-top: 35px;
}
.solutions-section-one {
    padding-bottom: 200px;
}
.persona-img {
    width: 100%;
    max-width: 200px;
}
.case-sheets {
    padding-bottom: 120px;
}
.case-box-img {
    width: 100%;
    max-width: 250px;
}
.solutions-testimony-wrapper {
    color: $white;
    text-align: center;
}
.solutions-testimony-size {
    height: 360px;
}
.persona-title {
    text-align: center;
    padding-top: 10px;
}
.case-sheets-wrapper {
    padding: 375px 0 70px;
    text-align: center;
}
.case-sheets-wrapper h2 {
    padding-bottom: 35px;
}
.case-box-wrapper {
    padding-bottom: 50px;
}
.slant-wrapper .solutions-features-size:after {
    background: inherit;
    bottom: 0;
    -webkit-transform: skewY(10.5deg);
    transform: skewY(10.5deg);
    -webkit-transform-origin: 100%;
    transform-origin: 100%;
    height: 1130px;
}
.slant-wrapper .solutions-testimony-size:after {
    bottom: -20%;
    -webkit-transform: skewY(10.5deg);
    transform: skewY(10.5deg);
    -webkit-transform-origin: 100%;
    transform-origin: 100%;
    height: 535px;
    background: $blue;
}
.solutions-section-four {
    padding-top: 160px
}
.testimony {
    max-width: 700px;
    margin: 0 auto;
    padding: 15px;
}

/* JQUERY USING THIS IN PERSONA.JS */
.persona-image{
	opacity: .3;
}
.persona-image:hover{
	opacity: inherit;
}
.persona-img-active{
	opacity: inherit !important;
}
.ds-box-img{
	width: 100%;
}
.case-sheets-wrapper-second{
	text-align: center;
}
.sol-fix{
	background: $white;
	height: 200px;
	position: relative;
}
.case-sheets {
    padding-bottom: 50px !important;
}
.case-sheets-wrapper-second{
	padding-bottom: 50px;
}
	.solutions-section-four {
    padding-top: 0 !important;
}
.case-box-title {
    text-align: center;
    margin: 0 auto;
    clear: both;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}	
.solution-cs-btn-wrapper {
    text-align: center;
    padding-top: 40px;
    clear: both;
}
.solutions-cs-header{
	padding-bottom: 35px;
}
.it-content-sec1{
	padding: 80px 0px;
}
.it-content-sec2{
	padding: 80px 0px;
	text-align: center;
	
	h3 {
		padding-bottom: 50px;
	}
	ul{
		text-align: left;
	}
	li{
		padding-bottom: 15px;
	}
}
.it-content-sec3{
	padding: 80px 0px;
	text-align: center;
}
.ds-content{
	padding-bottom: 150px;
}
.res-button{
	padding-top: 90px;
	clear: both;
}
.it-content-sec2 img{
	width: 100%;
	max-width: 500px;
	padding-bottom: 50px;
}
.img-container {
	padding: 50px 0px;
}
	
</style>

<div class="container-fluid <?php the_field('banner_color'); ?>">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?><?php the_field('left_button_path'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white orange-text" target="_blank"><?php the_field('left_button_title'); ?></a> 
				<a href="<?php echo ROOT_URL; ?><?php the_field('right_button_path'); ?>" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white" target="_blank"><?php the_field('right_button_title'); ?></a>
			</div><!--banner-btns-->		
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<!-- banner video -->
<div class="modal fade" id="banner-video" tabindex="-1" role="dialog" aria-labelledby="banner-videoLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title heading-4" id="banner-videoLabel"><?php the_field('sol-video-title'); ?></h4>
			</div>
			<div class="modal-body">
				<?php the_field('sol_video'); ?>
			</div>
		</div><!-- modal-body -->
			<div class="modal-footer">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->


<section class="container-fluid solutions-section-one wrap push">
	<div class="container solutions-section-one-wrapper">
		
		
		<h2 class="pink-text heading-2"><?php the_field('persona_section_header'); ?></h2>
		<div class="persona-list">
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-1">
				<div class="persona-image">
					<img src="<?php the_field('persona_1_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_1_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-2">
				<div class="persona-image">
					<img src="<?php the_field('persona_2_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_2_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-3">
				<div class="persona-image">
					<img src="<?php the_field('persona_3_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_3_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-4">
				<div class="persona-image">
					<img src="<?php the_field('persona_4_image'); ?>" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4"><?php the_field('persona_4_title'); ?></h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
		</div><!-- persona-list -->
		
		
		
			<!-- persona-1 -->
			<div class="persona-info-wrapper" id="persona-1-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php the_field('persona_1_image'); ?>" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3 class="heading-3"><?php the_field('persona_1_title'); ?></h3>
						<?php the_field('persona_1_content'); ?>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?><?php the_field('persona_1_button_path'); ?>" class="btn btn-lg btn-green"><?php the_field('persona_1_button_title'); ?></a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-2 -->
			<div class="persona-info-wrapper" id="persona-2-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php the_field('persona_2_image'); ?>" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3 class="heading-3"><?php the_field('persona_2_title'); ?></h3>
						<?php the_field('persona_2_content'); ?>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?><?php the_field('persona_2_button_path'); ?>" class="btn btn-lg btn-green"><?php the_field('persona_2_button_title'); ?></a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-3 -->
			<div class="persona-info-wrapper" id="persona-3-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php the_field('persona_3_image'); ?>" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3 class="heading-3"><?php the_field('persona_3_title'); ?></h3>
						<?php the_field('persona_3_content'); ?>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?><?php the_field('persona_3_button_path'); ?>" class="btn btn-lg btn-green"><?php the_field('persona_3_button_title'); ?></a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-4 -->
			<div class="persona-info-wrapper" id="persona-4-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php the_field('persona_4_image'); ?>" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3 class="heading-3"><?php the_field('persona_4_title'); ?></h3>
						<?php the_field('persona_4_content'); ?>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?><?php the_field('persona_4_button_path'); ?>" class="btn btn-lg btn-green"><?php the_field('persona_4_button_title'); ?></a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
		
	</div><!-- solutions-section-one-wrapper -->
</section><!-- solutions-section-one -->

<section id="system-features" class="container-fluid slant-wrapper wrap push">	
	<section class="solutions-system-features-wrapper">
		<div class="slant purple-bg solutions-features-size">
			<div class="slant-content-wrap">
				<div class="system-features solutions-system-features">
					<div class="container system-features-wrapper">
						<h2 class="heading-2"><?php the_field('system_features_section_header'); ?></h2>
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-1" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php the_field('feature_1_image'); ?>)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5"><?php the_field('feature_1_title'); ?></h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-2" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php the_field('feature_2_image'); ?>)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5"><?php the_field('feature_2_title'); ?></h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-3" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php the_field('feature_3_image'); ?>)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5"><?php the_field('feature_3_title'); ?></h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						
					<!-- SECTIONS 1-3 COLLAPSED DATA -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-1">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2"><?php the_field('feature_1_header'); ?></h2>
										<?php the_field('feature_1_content'); ?>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-2">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2"><?php the_field('feature_2_header'); ?></h2>
										<?php the_field('feature_2_content'); ?>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-3">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2"><?php the_field('feature_3_header'); ?></h2>
										<?php the_field('feature_3_content'); ?>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
						
						
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-4" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php the_field('feature_4_image'); ?>)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5"><?php the_field('feature_4_title'); ?></h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-5" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php the_field('feature_5_image'); ?>)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5"><?php the_field('feature_5_title'); ?></h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-6" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php the_field('feature_6_image'); ?>)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5"><?php the_field('feature_6_title'); ?></h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
					</div><!-- system-feature-wrapper -->
				
					<!-- SECTIONS 4-6 COLLAPSED DATA -->				
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-4">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2"><?php the_field('feature_4_header'); ?></h2>
										<?php the_field('feature_4_content'); ?>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-5">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2"><?php the_field('feature_5_header'); ?></h2>
										<?php the_field('feature_5_content'); ?>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-6">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2"><?php the_field('feature_6_header'); ?></h2>
										<?php the_field('feature_6_content'); ?>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					
				</div>
			</div>
		</div>
	</section>
</section>


<section class="container-fluid case-sheets lightGray-bg wrap push">
	<div class="container case-sheets-wrapper">
		<h2 class="purple-text heading-2">Datasheets</h2>
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/overview-june-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-overview-min.jpg" class="ds-box-img" alt="">
						<h4 class="heading-4">Overview Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/solution-june-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-solution-min.jpg" class="ds-box-img" alt="">
						<h4 class="heading-4">Solutions Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/food-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/food-service-newlogo.jpg" class="ds-box-img" alt="">
						<h4 class="heading-4">Food Service Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="solution-cs-btn-wrapper">
			<a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-green" target="_blank">Resources</a>
		</div>
	</div><!-- case-sheets-wrapper -->
</section><!-- case-sheets -->


<section class="container-fluid case-sheets-second lightGray-bg wrap push">
	<div class="container case-sheets-wrapper-second">
		<div class="solutions-cs-header">
			<h2 class="purple-text heading-2">Case Studies</h2>	
		</div>
		
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Buffalo-Wild-Wings.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/buffalowildwings-resources.jpg" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
						<h4 class="heading-4">Buffalo Wild Wings Case Study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2015/08/Case-Study-Papa-Murphys.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/papa-murphies.png" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
					<h4 class="heading-4">Papa Murphy's Case Study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-IHOP.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/ihop.png" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
					<h4 class="heading-4">IHOP Case Study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="solution-cs-btn-wrapper">
			<a href="<?php echo ROOT_URL; ?>/5299-2" class="btn btn-lg btn-green" target="_blank">More Case Studies</a>
		</div>
	</div><!-- case-sheets-wrapper -->
</section><!-- case-sheets -->		
		
		





<section class="container-fluid section-four wrap push">
	<div class="section-four-wrapper">
		<h2 class="green-text heading-2">Trusted by the World’s Best Brands</h2>
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
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/ASI.png" alt="ASI" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/golden-corral.png" alt="Golden Corral" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/hard-rock.png" alt="Hard Rock" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/ihop.png" alt="IHop" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/longhorn-steakhouse.png" alt="Longhorn Steakhouse" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/macaroni-grill.png" alt="Macaroni Grill" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/mcdonalds.png" alt="Mcdonalds" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/olive-garden.png" alt="Olive Garden" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/papa-murphies.png" alt="Papa Murphy's" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/pollo-loco.png" alt="Pollo Loco" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/Chemstar.PNG" alt="Chemstar" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/sears.png" alt="Sears" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/starbucks.png" alt="Starbucks" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo visible"><img src="<?php echo ROOT; ?>assets/img/clients/staybrdige.png" alt="Stay Bridge" class="customerLogo-img"></div><!-- customer-logo -->
			<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 customer-logo"><img src="<?php echo ROOT; ?>assets/img/clients/texas-roadhouse.png" alt="Texas Roadhouse" class="customerLogo-img"></div><!-- customer-logo -->
		</div><!--brag-time -->
		<div class="brag-btn-wrapper">
			<a href="<?php echo ROOT_URL; ?>/5299-2/" class="btn btn-lg btn-green">Read Case Studies</a>
		</div><!-- brag-btn-wrapper -->
	</div><!-- section-four-wrapper -->
</section><!-- section-four -->

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

<script src="<?php bloginfo('template_directory'); ?>/assets/js/personas.js"></script>









