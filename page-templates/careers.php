<?php
/**
 * Template Name: Careers
 */
get_header(); ?>
<style>
	.join-video-wrapper{
		max-width: 900px;
		margin: 0 auto;
	}
	.careers-pg-title{
		padding-top: 35px;
		padding-bottom: 40px;
		text-align: center;
	}
	.careers-value-img {
    height: 300px;
	position: relative;
/*		    box-shadow: 1px -1px 15px black inset;*/
}
	.careers-award {
		padding: 50px 0;
	}
.car-par-head {
    position: absolute;
    top: 40%;
    text-align: center;
    width: 100%;
    color: white;
}
	.careers-text{
		text-align: center;
		padding:  50px 0;
		max-width: 900px;
		margin: 0 auto;
	}
	.careers-values-text {
		padding: 0 !important;
		float:left;
		margin-right:15px;
}
	
	.careers-values-text ul li span {
    line-height: 220%;
}
	
	.perks-wrappin{
		padding: 50px 0;
		text-align: center;
	}
	.perks-here {
    padding: 50px 0;
    overflow: auto;
}
	.perk-icons {
    font-size: 5rem;
    padding-bottom: 10px;
}
	.perk-container {
    border-radius: 5px;
    height: 180px;
}
	.perk-container-wrapper {
    text-align: center;
    padding: 30px;
}
	.culture-wrapper{
		padding: 50px 0;
	}
.culture-talk {
    padding-bottom: 35px;
    text-align: center;
}
	.careers-culture-list ul li {
    list-style: none;
    padding-bottom: 15px;
}
	.culture-list-center{
		text-align: center;
	}
.careers-loc-img {

    padding-right: 50px;
}
	.car-loc-img{
		max-width: 200px;
		width: 100%;
	}
	.office-list ul li{
		list-style: none;
	}
	.careers-job-heading {
		text-align: center;
    	padding-top: 50px;
	}
	.join-team-text{
		padding: 35px 0;
		text-align: center;
	}
	
	.left-ls{
		text-align: right;
	}
	.righ-ls{
		margin-left: 50px;
	}
	
	@media only screen and (max-width: 768px){
		.careers-text {
			padding: 0;
			padding-top: 35px;
		}
		.careers-culture-list ul {
    padding: 0;
}
		
	}
	
	@media only screen and (max-width: 425px){
		.culture-talk {
			padding-left: 15px;
			padding-right: 15px;
		}
		.careers-values-text ul {
    padding: 0;
}
		.values-img-wrapper {
    display: none;
}
		.locations-title {
		padding-bottom: 35px;
	}
		.office-list ul {
    padding: 0;
    padding-top: 35px;
}
		.location-wrapper {
    padding-bottom: 35px;
}
	}
	
</style>
	
<div class="container-fluid pink-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Careers</h1>
			<div class="banner-btns">
				<button type="button" class="btn btn-lg btn-inverse-white" data-toggle="modal" data-target="#banner-video">Watch Video</button> <a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Free Demo</a>
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
				<h4 class="modal-title" id="banner-videoLabel">Pretty much the coolest company ever</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/ovpzlqhpdm.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_ovpzlqhpdm videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<div class="container-fluid wrap push">
	<div class="container careers-why">
		<div class="careers-pg-title">
			<h1 class="orangeTwo-text">Why Work At RizePoint?</h1>
		</div><!--careers-why-title-->
		<div class="join-video-wrapper">
			<script src="https://fast.wistia.com/embed/medias/ovpzlqhpdm.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_ovpzlqhpdm videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
		</div><!--careers-why-text-->
		<div class="careers-text">
			<p>We build software that makes great companies even better. At every company, behind the scenes, there’s a quality department working hard to make sure displays look good, brand standards are followed, construction is done well, food is safe, or facilities are good-looking and clean. We’re the company helping them make that happen.</p>
			<p>We hire experts. We want to work with people who love what they do and are great at it. If you want to be part of a team that cares about creativity, integrity, hard work, and fun, check out our open positions. 
			</p>
		</div>
	</div><!--careers-why-->
</div><!--container-fluid-->
		
	<section class="container-fluid clients-loop careers-award lightGray-bg wrap push"><!--employee-awards-->		
		<h3 class="text-center">Award-Winning Employee Satisfaction</h3>	
		<div class="container clients-loop-wrapper"><!--awards list start-->
			<div class="col-md-3 col-sm-6 col-xs-12 awards-career-wrapper">
				<div class="award-sec-wrapper customer-logo box-shadow">
					<img src="https://rizepoint.com/wp-content/uploads/2017/09/logo-deseret-news-min.png" alt="" class="customerLogo-img awards-img">
				</div>
				<div class="client-name">
					<h4 class="text-center"><a href="http://www.deseretnews.com/top/3901/0/The-top-62-companies-to-work-for-in-Utah.html">RizePoint Makes Deseret News Top Companies to Work for in Utah</a></h4>
				</div><!-- client-name -->
			</div><!-- client-box-wrapper -->
			
			<div class="col-md-3 col-sm-6 col-xs-12 awards-career-wrapper">
				<div class="award-sec-wrapper customer-logo box-shadow">
					<img src="https://rizepoint.com/wp-content/uploads/2017/06/silver.png" alt="" class="customerLogo-img awards-img">
				</div><!-- award-sec-wrapper customer-logo box-shadow -->
				<div class="client-name">
					<h4 class="text-center"><a href="https://rizepoint.com/press-releases/corporate-social-responsibility-award/">RizePoint Corporate Social Responsibility Program Wins Stevie Award  </a></h4>
				</div><!-- client-name -->
			</div><!-- client-box-wrapper -->
			
			<div class="col-md-3 col-sm-6 col-xs-12 awards-career-wrapper">
				<div class="award-sec-wrapper customer-logo box-shadow">
					<img src="https://rizepoint.com/wp-content/uploads/2016/06/CEO-of-the-Year.jpg" alt="" class="customerLogo-img awards-img">
				</div><!-- award-sec-wrapper customer-logo box-shadow -->
				<div class="client-name">
					<h4 class="text-center"><a href="https://rizepoint.com/press-releases/frank-maylett-ceo-of-the-year/">Frank Maylett named CEO of the Year</a></h4>
				</div><!-- client-name -->
			</div><!-- client-box-wrapper -->
			
			<div class="col-md-3 col-sm-6 col-xs-12 awards-career-wrapper">
				<div class="award-sec-wrapper customer-logo box-shadow">
					<img src="https://rizepoint.com/wp-content/uploads/2016/11/top-places-to-work.png" alt="" class="customerLogo-img awards-img">
				</div><!-- award-sec-wrapper customer-logo box-shadow -->
				<div class="client-name">
					<h4 class="text-center"><a href="https://rizepoint.com/press-releases/rizepoint-2016-top-workplace/">Salt Lake Tribune Names RizePoint As A 2016 Top Workplace </a></h4>
				</div><!-- client-name -->
			</div><!-- client-box-wrapper -->			
		</div><!--awards list end-->
	</section><!--employee-awards-->

<div class="container-fluid parallax careers-value-img wrap push" style="background-image: url(<?php echo ROOT; ?>/assets/img/careers/the-team.jpg)">
	<div class="car-par-head par-overlay">
		<h2>RizePoint's Values</h2>
	</div><!-- container -->
</div><!-- careers-par -->

<!--
<div class="container-fluid wrap push">
	<div class="container values-wrapper orangeTwo-bg">
		<div class="careers-values white-text">
			<div class="col-md-3 col-sm-12 col-xs-12 values-img-wrapper">
				<ul>
					<li><img src="<?php echo ROOT; ?>assets/img/infographics/rocketboy.png"></li>
					<li><img src="<?php echo ROOT; ?>assets/img/infographics/goblet.png"></li>
			
					<li><img src="<?php echo ROOT; ?>assets/img/infographics/meeting.png"></li>
					<li><img src="<?php echo ROOT; ?>assets/img/infographics/party.png"></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12 careers-values-text">
				<ul>
					<li class="left-ls">Triumph. </li>
					<li class="left-ls">Empower. </li>
					<li class="left-ls">Unite. </li>
					<li class="left-ls">Share. </li>
					<li class="left-ls">Enjoy. </li>

				</ul>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 careers-values-text">
				<ul>
					<li><span class="right-ls">Play to win through preparation and delivery. </span></li>
					<li><span class="right-ls">Create opportunity for others to be successful.</span></li>
					<li><span class="right-ls">Come together to work and build the team.</span></li>
					<li><span class="right-ls">The right ideas will change the game.</span></li>
					<li><span class="right-ls"> Learn, grow, and celebrate.</span></li>

				</ul>
			</div>
			
		</div>
	</div>
</div>
-->
<div class="container-fluid lightGray-bg wrap push">
	<div class="container perks-wrappin">
		<h2 class="green-text">This Is What You Really Want To Know About</h2>
		
		<div class="perks-here">
			<div class="col-md-4 col-sm-6 col-xs-12 perk-container">
				<div class="perk-container-wrapper">
					<div class="perk-icon-wrapper"><i class="fa fa-plane green-text perk-icons"></i></div>
					<div class="the-perk">Unlimited paid time off </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 perk-container">
				<div class="perk-container-wrapper">
					<div class="perk-icon-wrapper"><i class="fa fa-medkit green-text perk-icons"></i></div>
					<div class="the-perk">Medical, dental, and vision benefits culture that values work-life balance </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 perk-container">
				<div class="perk-container-wrapper">
					<div class="perk-icon-wrapper"><i class="fa fa-money green-text perk-icons"></i></div>
					<div class="the-perk">Excellent 401K with generous match</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 perk-container">
				<div class="perk-container-wrapper">
					<div class="perk-icon-wrapper"><i class="fa fa-lemon-o green-text perk-icons"></i></div>
					<div class="the-perk">Break room stocked with snacks and games</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 perk-container">
				<div class="perk-container-wrapper">
					<div class="perk-icon-wrapper"><i class="fa fa-universal-access green-text perk-icons"></i></div>
					<div class="the-perk">On-site gym, daycare, and cafeteria</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 perk-container">
				<div class="perk-container-wrapper">
					<div class="perk-icon-wrapper"><i class="fa fa-comments-o green-text perk-icons"></i></div>
					<div class="the-perk">Open-door executive meetings and regular town halls</div>
				</div>
			</div>
		</div>
		<div class="spacing">
			<span>Follow us on <a href="https://www.linkedin.com/company-beta/77852/" target="_blank">LinkedIn</a> or <a href="https://rizepoint.applicantpro.com/jobs/" target="_blank">sign up for job alerts</a> through Applicant Pro.</span>
		</div>
	</div>
</div>

<div class="container-fluid wrap push">
	<div class="container culture-wrapper">	
		<div class="careers-culture">
			<div class="careers-culture-title">
				<h2 class="orangeTwo-text">Culture</h2>
			</div><!--careers-values-title-->
			<div class="culture-talk">
				<p>It’s rare to find the kind of workplace that turns conversations with friends from “Ugh. Work.” into “So I’m doing this cool thing at work!” RizePoint is one of those places. We work hard to make sure the people we hire and the environment we create makes you excited to think about what you’re doing. We feel like we’ve put together a pretty good recipe for our cultural secret sauce. Here’s a condensed list of the ingredients that make RizePoint something to rave about:</p>
			</div>
			<div class="culture-list-center">
				<div class="col-md-6 col-sm-6 col-xs-12 careers-culture-list">
					<ul>
						<li>Clear strategic direction that guides our growth</li>
						<li>Company-wide transparency through things like open-door executive meetings, regular town halls, lunch and learns, and monthly company meetings</li>
						<li>Focus on personal development in a way that empowers you and delivers innovation to our clients</li>
						<li>Think differently about design</li>
					</ul>
				</div><!--careers-values-text-->
				<div class="col-md-6 col-sm-6 col-xs-12 careers-culture-list">
					<ul>
						<li>Don’t spread ourselves or our business too thin</li>
						<li>Focus on what matters most to the customer</li>
						<li>Innovative and collaborative environment</li>
						<li>Give back through our <a href="<?php echo ROOT; ?>/rize-shine">Rize &amp; Shine program</a> of community action that supports global aid, local technology education, and sustainable food</li>
					</ul>
				</div><!--careers-values-text-->
			</div>
		</div><!--careers-values-->
	</div>
</div><!-- CONTAINER-FLUID -->

<div class="container-fluid wrap push">
	<div class="container location-wrapper lightGray-bg">
		<div class="locations-title">
			<h2 class="green-text">Locations</h2>
		</div>
		<div class="container location-content">
			<div class="col-md-4 col-sm-12 col-xs-12 careers-loc-img">
				<img src="<?php echo ROOT; ?>\assets\img\icons\content-icon1.png" class="car-loc-img" alt="">
			</div><!--careers-locations-text-->
			<div class="col-md-4 col-sm-6 col-xs-12 office-list">
				<ul>
					<li><h2 class="orangeTwo-text">Salt Lake City</h2></li>
					<li><p>2890 East Cottonwood Pkwy, Suite 250</p></li>
					<li><p>Salt Lake City, UT 84121</p></li>
				</ul>		
			</div><!--careers-locations-text-->
			<div class="col-md-4 col-sm-6 col-xs-12 office-list">
				<ul>
					<li><h2 class="pink-text">St. George</h2></li>
					<li><p>229 East Saint George Blvd., Suite 101</p></li>
					<li><p>Saint George, UT 84770</p></li>
				</ul>
			</div>
		</div>
	</div><!--location-wrapper-->
</div><!--container-fluid-->

<div class="container careers-job wrap push">
	<div class="careers-job-heading blue-text">
		<h2 class="green-text">Join our Team</h2>
	</div><!--carees-job-title-->
	<div class="join-team-text">
		<p>Come be part of our team. Check out our jobs below to apply, or send your resume to careers@rizepoint.com. To keep up with new job listings, follow us on <a href="https://www.linkedin.com/company-beta/77852/" target="_blank">LinkedIn</a> or <a href="https://rizepoint.applicantpro.com/jobs/" target="_blank">sign up for alerts</a> through Applicant Pro.</p>
	</div>
	<div class="careers-job-text">
		<iframe src="https://rizepoint.applicantpro.com/iframe/mobile" width="100%" height="800" frameborder="0"></iframe>
	</div><!--careers-job-text-->
</div><!--careers-job-->


<?php get_footer(); ?>