<?php 
/**
 * Template Name: Solutions | Hospitality
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

<div class="container-fluid green-blue">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1">Hospitality</h1>
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
				<h4 class="modal-title heading-4" id="banner-videoLabel">How RizePoint Can Help Hospitality</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/gd2dapdwyk.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_gd2dapdwyk videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->


<section class="container-fluid solutions-section-one wrap push">
	<div class="container solutions-section-one-wrapper">
		<h2 class="pink-text heading-2">Creating Guest Experiences That Shine with RizePoint® </h2>
		<div class="persona-list">
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-1">
				<div class="persona-image" id="persona-img-1">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/ms-auditor-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4">Guest Experience and Quality Executive </h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-2">
				<div class="persona-image" id="persona-img-2">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/ms-director-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4">Director of Quality and Compliance</h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-3">
				<div class="persona-image" id="persona-img-3">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/mr-exec-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4">Quality and Operations Manager</h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
			<div class="col-md-3 col-sm-6 col-xs-6 persona-wrapper personaBtn" id="persona-4">
				<div class="persona-image" id="persona-img-4">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/solutions/ms-manager-min.png" class="persona-img" alt="">
				</div><!-- persona-image -->
				<div class="persona-title">
					<h4 class="heading-4">Auditor</h4>
				</div><!-- persona-title -->
			</div><!-- persona-wrapper -->
		</div><!-- persona-list -->
		
		
		
			<!-- persona-1 -->
			<div class="persona-info-wrapper" id="persona-1-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php echo ROOT; ?>assets/img/solutions/rizepoint-modern8-26585-min-min.jpg" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3 class="heading-3">Guest Experience and Quality Executive </h3>
					<p>
					Don’t get buried under a mountain of big data. Get complete visibility into your global hotel operations, and the business intelligence to identify information that matters. RizePoint lets your teams gather data on operations, and gives you effortless reporting on operations and quality at the core of your business performance. Then use that data to make decisions about business strategy that drives revenue by improving efficiency, guest experience, and safety.
					</p>
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
					<h3 class="heading-3">Director of Quality and Compliance</h3>
					<p>
					Give your team the tools they need to evaluate, correct, and monitor standards and regulations in every hotel and resort. By ensuring consistency and quality across your properties, you manage threats to your brand reputation while driving guest loyalty. RizePoint’s management and mobile evaluation platform helps you adhere to brand standards perfectly in the competitive hospitality industry.
					</p>
					<div class="persona-cta-btn">
						<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-green">Request A Demo</a>
					</div><!-- persona-cta-btn -->
				</div><!-- persona-info-text -->
			</div><!-- persona-info-wrapper -->
			
			<!-- persona-3 -->
			<div class="persona-info-wrapper" id="persona-3-content">
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-image">
					<img src="<?php echo ROOT; ?>assets/img/solutions/rizepoint-modern8-26402-min-min.jpg" class="persona-info-img" alt="">
				</div><!-- persona-info-image -->
				<div class="col-md-6 col-sm-12 col-xs-12 persona-info-text">
					<h3 class="heading-3">Quality and Operations Manager</h3>
					<p>
					Stop the quality and ops management juggling act. RizePoint’s cloud-based management console gives you the tools to manage efficient, accurate evaluations at every hotel or resort property. Simply push updated schedules and forms to assessors through their mobile inspection app. And corrective actions or last-minute reports are no problem with RizePoint’s intuitive platform that lets you automate corrections and create ad-hoc reports as fast as you can type.
					</p>
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
					<h3 class="heading-3">Auditor</h3>
					<p>
					RizePoint Mobile Auditor® makes you an efficiency master. There’s never enough time when you’re in the field, and if it can go wrong, it will go wrong. With RizePoint, there’s no late-night data entry, or bulky binders to carry. You gather the details you need on a phone or tablet, work offline when connections are a problem, upload your results easily, and highlight critical details for quick correction.
					</p>
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
						<h2 class="heading-2">System Features</h2>
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-1" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Mobile-Auditor-App_RizePoint-min.jpg)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5">Mobile Auditor</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-2" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Business-Intelligence-Analytics_RizePoint-min.PNG)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5">Automated Corrective Action</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-3" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Corrective-Action-Planning-Management_RizePoint-min.jpg)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5">Business Intelligence</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
					</div><!-- system-feature-wrapper -->
				
					<!-- SECTION 3 COLLAPSED DATA -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-1">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2">Mobile app for site inspections</h2>
									<p>Mobile Auditor streamlines remote location assessments for inspectors and managers. Teams see immediate assessment results in the cloud-based RizePoint Management Console, replacing long, manual upload processes.</p>
									<ul>
										<li>Capture data easily using powerful forms, with navigation that leads auditors through the process.</li>
										<li>Offline availability frees inspectors from connection concerns.</li>
										<li>Attach short videos, upload files, and mark-up photos to highlight important audit details. </li>
										<li>Communicate details on non-compliant findings through comment features such as free form, pre-defined or auditor-configured comment fields. </li>
										<li>Start audits with just one click when you use RizePoint to schedule your inspections.</li>
									</ul>
									<p>Start audits with just one click when you use RizePoint to schedule your inspections.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear pink-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-2">
							<div class="img-pointer sf-pointer-2"></div>
								<div class="feature-content">
									<h2 class="heading-2">Act quickly to correct issues before they become costly liabilities</h2>
									<p>Action plans are automatically created for any item marked out of compliance during a Mobile Auditor on-site assessment. Within RizePoint, you can use rules to trigger action plan tasks, establish due dates, send notifications, create alerts, issue reminders, and monitor task completion.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear blue-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-3">
							<div class="img-pointer sf-pointer-3"></div>
								<div class="feature-content">
									<h2 class="heading-2">Turn audit results into a reporting powerhouse</h2>
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

					<div class="container system-features-wrapper">
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-4" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Supplier-Onboarding_RizePoint-min.PNG)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5">Evaluation Scheduling</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-5" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Role-Based-Access_RizePoint-min.PNG)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5">Automated Communication Tools</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
						<div class="col-lg-4 col-sm-6 col-xs-12 box-feature-wrapper" role="button" data-toggle="collapse" href="#home-box-feature-6" aria-expanded="false" aria-controls="collapseExample">
							<div class="box-feature" style="background-image: url(<?php echo ROOT; ?>assets/img/home/Automated-Communication_RizePoinnt-min.jpg)"></div><!-- box-feature -->
							<div class="box-feature-header">
								<h5 class="heading-5">Security</h5>
							</div><!-- box-feature-header -->
						</div><!-- box-feature -->
					</div><!-- system-feature-wrapper -->

					<!-- SECTION 3 COLLAPSED DATA -->
					<div class="container-fluid clear green-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-4">
								<div class="img-pointer sf-pointer-1"></div>
								<div class="feature-content">
									<h2 class="heading-2">Schedule assessments with ease</h2>
									<p>You’ll appreciate how easy it is to schedule evaluations using RizePoint. Create and view schedules with ease in the cloud-based RizePoint Management Console.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear pink-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-5">
							<div class="img-pointer sf-pointer-2"></div>
								<div class="feature-content">
									<h2 class="heading-2">Provide complete visibility throughout the entire organization</h2>
									<p>Provide a single-pane-of-glass view into company-wide operations. With RizePoint, you have visibility and transparency at all levels of the business paired with automated notifications and reporting subscription options to keep stakeholders informed. Standardized templates, email alerts, push-notifications, and report communications make it easy to manage, monitor, and communicate compliance progress.</p>
								</div><!-- home-box-feature-1 -->
							</div>
						</div><!-- container -->
					</div><!-- container-fluid -->
					<div class="container-fluid clear blue-bg feature-drop">
						<div class="container">
							<div class="collapse pointer-position" id="home-box-feature-6">
							<div class="img-pointer sf-pointer-3"></div>
								<div class="feature-content">
									<h2 class="heading-2">Protect sensitive data</h2>
									<p>Sensitive standards manuals, audit results, and compliance reporting must always remain secure and confidential. Encryption, single sign-on functionality using network logins, and individual access rights protect your data at every stage.</p>
									<ul>
										<li>Service Organization Controls Type II (SOC 2) compliant datacenter</li>
										<li>SSAE 16 Type II certified production infrastructure hosting center</li>
										<li>Hybrid tenancy data architecture for data partitioning</li>
										<li>Administrative, physical, and technical safeguards protect network and systems </li>
									</ul>
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
		<h2 class="purple-text heading-2">Datasheets</h2>
		<div class="col-md-4 col-sm-6 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/overview-june-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-overview-min.jpg" class="ds-box-img" alt="">
						<h4 class="heading-4">Overview Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-6 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="<?php echo ROOT; ?>/assets/docs/datasheets/solution-june-2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/rizepoint-solution-min.jpg" class="ds-box-img" alt="">
						<h4 class="heading-4">Solutions Datasheet</h4>
				</a>	
				</div><!-- case-box-wrapper -->
			</a>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-6 col-xs-12 case-box">
			<a href="#" target="_blank">
				<div class="case-box-wrapper hovereffect">
				<a href="https://rizepoint.com/wp-content/uploads/2015/08/datasheet_-_hospitality_2017.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/datasheets/hospitality-newlogo.jpg" class="ds-box-img" alt="">
						<h4 class="heading-4">Hospitality</h4>
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
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Hospitality-Now.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/hospitality-now-resources.jpg" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
						<h4 class="heading-4">Hospitality Now Case Study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2015/08/Case-Study-IHG.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/ihg-resources.jpg" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
						<h4 class="heading-4">IHG Case study</h4>
					</div>
				</a>
			</div>
		</div><!-- case-box -->
		<div class="col-md-4 col-sm-4 col-xs-12 case-box">
			<div class="customer-logo client-box-pic box-shadow sol-fix">
				<a href="https://rizepoint.com/wp-content/uploads/2016/10/RizePoint-Case-Study-Avendra.pdf" target="_blank">
					<img src="<?php echo ROOT; ?>/assets/img/clients/avendra-resources.jpg" class="customerLogo-img raq-logo-fix" alt=""><br>
					<div class="case-box-title">
						<h4 class="heading-4">Avendra Case Study</h4>
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
			<?php include __DIR__ . "/../includes/client-logos.php"; ?>
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

<?php get_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/personas.js"></script>









