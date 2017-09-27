<?php
/*
Template Name: Support-Template
*/
get_header(); ?>
<style>
	.support-head{
		padding-top: 70px;
	}
	
	.support-cont{
    	border-bottom: 1px solid #BBBCBC;
	}
	
	.support-sub{
		padding-top: 70px;
	}
	
	.matrix{
		text-align: center;
		padding-bottom: 70px;
	}
	
	.copy-left{
		padding:0px 100px;
	}
	
	.copy-right{
		padding-left: 50px;
	}
	
	.content-1{
		 padding-bottom: 55px;
	}
	
	.content-1 h3{
		font-size: 3rem;
		color: #28B29A;
		padding-bottom: 18px;
	}
	
	.content-1 p{
		font-size: 2rem;
	}
	
	.content-1 ul li{
		font-size: 2rem;
	}

.engage {
    background-image: url(https://rizepoint.com/wp-content/uploads/2017/04/mirage-engage.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-attachment: fixed;
    box-shadow: 1px -1px 15px black inset;
    height: 375px;
    position: relative;
}
	.engage-wrapper {
    position: absolute;
    text-align: center;
    left: 0;
    right: 0;
    top: 35%;
    color: white;
}
	.engage-wrapper h2 {
    font-size: 2.3em;
}
	.engage-wrapper h4 {
    font-size: 1.5em;
}
	.engage-bt-wrapper {
    margin-top: 35px;
}
	.engage-btn {
    background-color: #28b29a;
    color: white;
    padding: 10px;
    border-radius: 5px;
}
	.matrix{
		padding-top: 35px;
	}
	.matrix-img{
		width: 100%;
		max-width: 800px;
	}
	.welcome-mesg{
		text-align: center;
	}
</style>


<div class="container-fluid green-blue-purple">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="home-banner-wrapper">
			<h1>Expertise and tools to help you get peak performance and optimal value from your RizePoint solution.</h1>
			<div class="banner-btns">
				<a href="https://rizepoint.zendesk.com/hc/en-us/signin?return_to=https%3A%2F%2Frizepoint.zendesk.com%2Fhc%2Fen-us&locale=1" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Sign-In</a> <a href="https://rizepoint.zendesk.com/hc/en-us/requests/new" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">Create a Ticket</a> <a href="https://rizepoint.zendesk.com/hc/en-us/requests" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white">View Ticket</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid support-sub wrap push">
	<div class="container">
	
			<div class="content-1">
			<div class="welcome-mesg">
			<h2 class="green-text">Welcome to RizePoint Support</h2>
			<p>Whether you need to tailor your RizePoint solution with configurations for your unique operation, or you need help resolving system issues, RizePoint offers dedicated tools and teams of professionals ready to deliver the assistance you need.</p>
				</div>
			<div class="matrix">
				<img src="https://rizepoint.com/wp-content/uploads/2017/08/Pricing.png" alt="Support Matrix" class="matrix-img">
			</div><!--matrix-->
				<h3>Product Updates</h3>
					<span>Innovation and improvement is key at RizePoint.  Keep your solution up-to-date with regular maintenance and feature release updates.</span>
						<ul>
							<li>Standard monthly maintenance releases include software updates that ensure the efficient operation of RizePoint systems </li>
							<li>Major product improvement releases add new features to the functionality of RizePoint systems </li>
						</ul>
					
			</div><!--content-1-->
			<div class="content-1">
				<h3>Managed Services</h3>
					<p>Secure managed services hours by selecting the right support package to accommodate your unique RizePoint solution set-up.
						<ul>
							<li>Additional user creation and existing user reconfiguration </li>
							<li>Form creation </li>
							<li>Location creation </li>
							<li>Reporting hierarchy </li>
							<li>Approvals</li>
							<li>Notifications </li>
							<li>Corrective Action Management </li>
							<li>Basic reporting questions </li>
							<li>Basic data imports </li>
							<li>New admin training </li>
							<li>Personalized training on RizePoint  system features</li> 
						</ul>
					** Managed services hours accrue through the end of each calendar quarter and then expire the last day of the quarter.
					</p>

			</div><!--content-1-->
			<div class="content-1">
				<h3>Support Desk Services</h3>
					<p>Get the assistance you need when you have issues, questions or other requirements.
						<ul>
							<li>Online ticket submission to report system issues </li>
							<li>Break/fix assistance for Severity Levels 1-3 </li>
							<li>Help desk support via email or phone </li>
							<li>Password reset for admins/franchisees</li>
						</ul>
					</p>
			</div><!--content-1-->
			
			<div class="content-1">
				<h3>Additional Services</h3>
					<p>Take advantage of a RizePoint site health check, request a roadmap review or participate in a business review to ensure complete support of your goals-included with your gold-level support package  
					</p>
				</div><!--content-1-->
				
				<div class="content-1">
				<h3>Configuration Enhancement Services</h3>
					<p>For advanced users desiring extra improvements, RizePoint offers additional fee-based configuration enhancement services. Use these services to get assistance with business intelligence, single-sign on, scoring, calculators and feedback report configurations. Contact RizePoint today to learn more.  
					</p>
				</div><!--content-1-->
			
			
	
		
	</div><!--container-->
	<div class="container-fluid engage">
  <section class="container engage-wrapper">
    <h2>Register for Engage</h2>
    <h4>February 6-8, 2018</h4>
    <div class="engage-bt-wrapper">
      <a href="https://rizepoint.com/engage" class="btn engage-btn btn-width-lg">Register Now</a>
    </div>
  </section>
</div>
</div><!--support-sub-->



<?php get_footer(); ?>