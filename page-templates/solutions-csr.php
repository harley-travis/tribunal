<?php 
/**
 * Template Name: Solutions | Responsible Sourcing
*/
get_header(); ?>

<style>
	
	
	img{
	width: 100%;
	}
	.ds-box-img{
		width: 100%;
	}
	.case-sheets-wrapper-second{
		text-align: center;
	}
	.sol-fix{
		background: white;
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
	
	@media only screen and (max-width: 425px){
		.case-box {
    margin-bottom: 35px;
}
		.slant-wrapper {
    display: none;
}
		.case-sheets-wrapper {
    padding-top: 0 !important;
}
		.case-sheets {
    margin-top: 35px;
}
	}
	
</style>

<div class="container-fluid purple-blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Responsible Sourcing</h1>
			<div class="banner-btns">
				<button type="button" class="btn btn-lg btn-width btn-inverse-white orange-text" data-toggle="modal" data-target="#banner-video">Watch Video</button> <a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-width btn-inverse-white">Free Demo</a>
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
				<h4 class="modal-title" id="banner-videoLabel">RizePoint Can Help With Responsible Sourcing</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/s5qan08x3q.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_s5qan08x3q videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->


<section class="container-fluid solutions-section-one wrap push">
	<div class="container solutions-section-one-wrapper">
		<h2 class="pink-text">Business Doing Good – RizePoint® Drives Responsible Sourcing</h2>
		<div class="persona-list">
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-1">
				<div class="persona-image" id="persona-img-1">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/ms-auditor-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4>CSR, Sustainability, and Compliance Executive   </h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-2">
				<div class="persona-image" id="persona-img-2">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/mr-exec-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4>Responsible Sourcing Director </h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-3">
				<div class="persona-image" id="persona-img-3">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/ms-director-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4>Manager Social Compliance </h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-4">
				<div class="persona-image" id="persona-img-4">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/ms-manager-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4>Compliance Auditor</h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
		</div><!-- persona-list -->
		
		
		
			<!-- persona-1 -->
			<div class="persona-info-wrapper" id="persona-1-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php echo ROOT; ?>assets/img/solutions/rizepoint-modern8-26402-min-min.jpg" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3>CSR, Sustainability, and Compliance Executive   </h3>
					<p>RizePoint gives you complete visibility into supplier management. Gain transparency into your supply chain with reporting that clearly shows adherence to responsible sourcing standards and regulations. Then use that data to drive revenue by guiding business strategy—highlighting trends that give early indication of problems or opportunities.</p>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-green">Request A Demo</a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-2 -->
			<div class="persona-info-wrapper" id="persona-2-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php echo ROOT; ?>assets/img/solutions/rizepoint-modern825157-min-min.jpg" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3>Responsible Sourcing Director </h3>
					<p>With RizePoint supporting your team, you’ll drive business success by ensuring supply chain standards are met by every supplier. RizePoint helps your team confidentially share requirements manuals, gather supplier documentation, and audit suppliers for adherence to responsible sourcing standards. Easily manage threats to brand reputation by maintaining approved supplier lists and ensuring company-wide consistency, quality, and safety. </p>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-green">Request A Demo</a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-3 -->
			<div class="persona-info-wrapper" id="persona-3-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php echo ROOT; ?>assets/img/solutions/rizepoint-modern8-26585-min-min.jpg" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3>Manager Social Compliance </h3>
					<p>RizePoint gives you the tools to onboard and maintain suppliers across your global supply chain. Share confidential requirements manuals, gather supplier documentation, conduct desk audits, and test products using a single quality management solution that delivers effortless reporting and automated corrective action.</p>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-green">Request A Demo</a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-4 -->
			<div class="persona-info-wrapper" id="persona-4-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php echo ROOT; ?>assets/img/solutions/rizepoint-small-min-min.jpg" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3>Compliance Auditor</h3>
					<p>RizePoint’s Mobile Auditor® makes you an efficiency master. There’s never enough time when you’re auditing suppliers throughout a global supply chain, and if it can go wrong, it will go wrong. With RizePoint, there’s no late-night data entry, or bulky binders to carry. You gather the details you need on a phone or tablet, work offline when connections are a problem, upload your results easily, and highlight critical details for quick correction.</p>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-green">Request A Demo</a>
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
						<h2>System Features for Responsible Sourcing</h2>
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-1" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Mobile-Auditor-App_RizePoint-min.jpg)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5>Business Intelligence</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-2" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Business-Intelligence-Analytics_RizePoint-min.PNG)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5>Automated Communication Tools </h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-3" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Corrective-Action-Planning-Management_RizePoint-min.jpg)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5>Mobile Auditor</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
					</div><!-- system-feature-wrapper -->
				
					<!-- SECTION 3 COLLAPSED DATA -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-1">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2>Turn audit results into a reporting powerhouse</h2>
									<p>With RizePoint, audit data is brought to life with dynamic visual reporting and dashboards for key analysis.</p>
									<ul>
										<li>Management Dashboards<br>
											RizePoint Management Dashboards put the data you need most at your fingertips, visually highlighting important information. View top-level details and drill down to specific information using any of the available standard dashboard options.
										</li>
										
										<li>Search-Driven Analytics<br>
											When reporting needs go beyond standard dashboards, you can now get answers as fast as you can type. Create ad-hoc reports with Search-Driven Analytics (SDA), powered by search engine technologies that give you answers and insights that matter. With SDA, you can analyze the many details of your quality performance activities—ask questions, analyze data, and build pinboards—in seconds. See data in new ways, tell a story with impact, and provide increased visibility for your stakeholders by including this optional RizePoint add-on in your operations.
										</li>
									</ul>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear pink-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-2">
							<div class="img-pointer sf-pointer-2"></div>
								<div class="feature-content">
									<h2>Provide complete visibility throughout the entire organization</h2>
									<p>Provide a single-pane-of-glass view into company-wide operations. With RizePoint, you have visibility and transparency at all levels of the business, paired with automated notifications and reporting subscription options to keep stakeholders informed. Standardized templates, email alerts, push-notifications, and report communications make it easy to manage, monitor, and communicate compliance progress.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear blue-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-3">
							<div class="img-pointer sf-pointer-3"></div>
								<div class="feature-content">
									<h2>Mobile app for site inspections</h2>
									<p>Mobile Auditor streamlines remote location assessments for inspectors and managers. Teams see immediate assessment results in the cloud-based RizePoint Management Console, replacing long, manual upload processes.</p>
									<ul>
										<li>Capture data easily using powerful forms, with navigation that leads auditors through the process.</li>
										<li>Offline availability frees inspectors from connection concerns.</li>
										<li>Attach short videos, upload files, and mark-up photos to highlight important audit details. </li>
										<li>Communicate details on non-compliant findings through comment features </li>
										<li>Start audits with just one click when you use RizePoint to schedule your inspections.</li>
									</ul>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->

					<div class="container system-features-wrapper">
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-4" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Supplier-Onboarding_RizePoint-min.PNG)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5>Automated Corretive Action</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-5" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Role-Based-Access_RizePoint-min.PNG)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5>Security</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						
					</div><!-- system-feature-wrapper -->

					<!-- SECTION 3 COLLAPSED DATA -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-4">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2>Act quickly to correct issues before they become costly liabilities</h2>
									<p>Action plans are automatically created for any item marked out of compliance during a Mobile Auditor on-site assessment. Within RizePoint, you can use rules to trigger action plan tasks, establish due dates, send notifications, create alerts, issue reminders, and monitor task completion.</p>
									
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear pink-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-5">
							<div class="img-pointer sf-pointer-2"></div>
								<div class="feature-content">
									<h2>Protect sensitive data</h2>
									<p>Sensitive standards manuals, audit results, and compliance reporting must always remain secure and confidential. Encryption, single sign-on functionality using network logins, and individual access rights protect your data at every stage.</p>
									<ul>
										<li>Service Organization Controls Type II (SOC 2) compliant datacenter</li>
										<li>SSAE 16 Type II certified production infrastructure hosting center</li>
										<li>Hybrid tenancy data architecture for data partitioning</li>
										<li>Administrative, physical, and technical safeguards protect network and systems </li>
									</ul>
									<p>Start audits with just one click when you use RizePoint to schedule your inspections.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear blue-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-6">
							<div class="img-pointer sf-pointer-3"></div>
								<div class="feature-content">
									<h2>Schedule audits with ease</h2>
									<p>You’ll appreciate how easy it is to schedule audits using RizePoint. Create and view schedules with ease in the cloud-based RizePoint Management Console.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
				</div><!-- system-features -->
			</div><!-- mobile-auditor-container -->
		</div><!-- solutions-features-size -->
	</section><!-- solutions-system-features-wrapper -->
</section><!-- slant-wrapper -->

<section class="container-fluid case-sheets lightGray-bg wrap push">
	<div class="container case-sheets-wrapper">
		<h2 class="purple-text">Datasheets</h2>
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/overview-june-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-overview-min.jpg" class="ds-box-img" alt="">
						<h4>Overview Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/solution-june-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-solution-min.jpg" class="ds-box-img" alt="">
						<h4>Solutions Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/food-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/food-service-newlogo.jpg" class="ds-box-img" alt="">
						<h4>Food Service Datasheet</h4>
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
			<h2 class="purple-text">Case Studies</h2>	
		</div>
		
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Wendys.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/wendys.png" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
						<h4>Wendy's Case Study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Checkers.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/checkers.png" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
					<h4>Checker's Case Study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Avendra.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/avendra-resources.jpg" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
					<h4>Avendra Case Study</h4>
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
		<h2 class="green-text">Trusted by the World’s Best Brands</h2>
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
				<h2>Request a Free Demo</h2>
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

<?php get_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/personas.js"></script>









