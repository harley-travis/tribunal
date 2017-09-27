<?php 
/**
 * Template Name: Pricing Template
*/
get_header(); ?>

<style>

	
.price-box-text{
	padding-top: 20px;
	text-align: center;
}
	
.price-box h1 {
	font-size: 4rem;
    text-align: center;	
	}
	
.price-box-text h3 {
    font-size: 5rem;
    text-align: center;
}
	
.price-box {
	background:#FAFAFA;
    padding: 25px 0px 25px 0px;
	text-align: center;
}	
	
.footnote {
    font-size: 1rem;
}	
	
.btn-options{
	margin-top:-20;
}
	.align-center{
		text-align: center;
	}
	
#monthly{
	font-size: 2rem;
	}
	
#time{
	text-align: center;
	}
	

	
.features-header {
	color: #a15a95;
    box-shadow: 3px 3px 3px #bbbcbc;
    padding: 25px 0px 25px 0px;
    margin-right: 100px;
	text-align: center;
}

.header th {
    font-size: 3rem;
}
	
	
	.display-block{
		display: block;
	}
	.display-none{
		display: none;
	}

	.pricing{
		padding-top: 35px;
	}
	.features {
    padding-top: 80px;
}
	.pricing-features{
		text-align: center;
		padding: 35px 0;
	}
	.cta-pricing-btn{
		padding: 30px 0;
		text-align: center;
	}
	.pricing-box-btn {
    text-align: center;
    padding-top: 15px;
}
	.pricing-size{
		font-size: 4rem;
	}
	.pricing-table {
    font-size: 1.5rem;
}
.pricing-specs {
    padding: 10px;
    border-radius: 5px;
}
	.pricing-specs-wrapper {
    margin: 35px 0;
}

	.mobile-pricing {
    padding: 50px 15px;
}
	.rp-feature-list ul li {
    list-style: none;
    text-align: center;
    padding: 10px 0px;
    border-bottom: 1px solid #eee;
}
	.rp-feature-list ul{
		padding: 0;
		margin: 0;
	}
	.rp-e-wrapper {
    padding-top: 35px;
}
	#spec-details {
    padding-bottom: 35px;
}
	
@media only screen and (max-width: 768px){
		.top-btn{
			visibility: hidden;
			margin-top: -235px;
		}

	
		.banner-btns-mobile{
			visibility: visible;
			text-align: center;
    		padding: 40px 0px 60px 0px;
	}
	}
@media only screen and (max-width: 425px){
	
	.display-block{
		display: none;
	}
	.display-none{
		display: block;
	}
	.price-box {
    margin-bottom: 35px;
}


	
	.tb-full{
			visibility: collapse;
		
	}
	
	.tb-mobile{
		text-align: center;
	}
}
</style>

<div class="container-fluid  green-blue-purple wrap-push">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>RizePoint Pricing</h1>
			<div class="banner-btns">
				<button type="button" class="btn btn-lg btn-inverse-white" data-toggle="modal" data-target="#homeVideo">Watch a Video</button> <a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-lg btn-inverse-white">Free Demo</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid wrap push">
	<div class="container pricing">
	
		<div class="col-md-6 col-sm-12 col-xs-12 pricing-option">
			<div class="price-box box-shadow">
				<h1 class="purple-text">RizePoint<br>Small Business</h1>
				<div class="pricing-info">
					<h3 class="green-text pricing-size">$49.95</h3>
					<span class="small-biz-terms">per month, per location <span><a href="#spec-details" class="lorraine">&#x2628;</a></span></span>
				</div>
				<div class="pricing-box-btn">
					<a href="<?php echo ROOT_URL; ?>/pricing-form/?utm_campaign=pricing-smb" class="btn btn-width btn-purple">Get Started Now</a>
				</div><!-- banner-btns -->
			</div><!--price-box-->
		</div><!--pricing-option-->
	
		<div class="col-md-6 col-sm-12 col-xs-12 pricing-option">
			<div class="price-box box-shadow">
				<h1 class="green-text">RizePoint<br>Enterprise</h1>
				<div class="pricing-info">
					<h3 class="pricing-size">Contact Us</h3>
					<span class="small-biz-terms">Please contact us so we can meet your unique needs <span><a href="#spec-details" class="lorraine">&#x2628;</a></span></span>
				</div>
				<div class="pricing-box-btn">
					<a href="<?php echo ROOT_URL; ?>/pricing-form/?utm_campaign=pricing-enterprise" class="btn btn-width btn-green">Contact For Pricing</a>
				</div><!-- banner-btns -->
			</div><!--price-box-->
		</div><!--pricing-option-->
		
	</div><!--pricing-->
</div>

<div class="container-fluid wrap push">
	<div class="container features display-block">	
			
		<table class="table table-striped pricing-table">
			<thead>
			  <tr class="header">
				<th class="green-text">What's Included</th>
				<th class="table-1 purple-text align-center">RizePoint<br>Small Business</th>
				<th class="table-2 green-text align-center">RizePoint<br>Enterprise</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>Industry-Standard, Best-Practice Audit Forms</td>
				<td class="align-center">2</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>

				<td>Personalized Audit Forms</td>
				<td class="align-center">1</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>
				<td>Mobile App Offline Operation</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>
				<td>Operate Mobile App in Web Browser</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>File/Video/Image Attachments</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>
				<td>Rich Text Editing</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Digital Signature</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Comment Capture</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Thermocouple Integration</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Corrective Action Management</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>
				<td>Roles and Permissions</td>
				<td class="align-center">2 (admin-auditor)</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>
				<td>Active Home Page</td>
				<td class="align-center">Configured for 2 roles</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>			
			  <tr>
				<td>Standard Audit Feedback Report for Each Audit Form</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			  <tr>
				<td>Management Dashboard</td>
				<td class="align-center">3 Preconfigured</td>
				<td class="align-center">12</td>
			  </tr>
				<tr>
				<td>System Training</td>
				<td class="align-center">4 hours via GoToMeeting</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			 <tr>
				<td>Online Support</td>
				<td class="align-center">Break fix, plus 10 inquiries/year</td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			 <tr>
				<td>Search-Driven Analytics Premium Add-on Option</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Audit Form Creation</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Audit Scheduling</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>One-click Start from Schedule</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Automated Communication Tools</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>API Support</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Import/Export Tools</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Surveys</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Approval Configurations</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			   <tr>
				<td>Routing Configurations</td>
				<td class="align-center"></td>
				<td class="align-center"><span class="glyphicon glyphicon-ok green-text" aria-hidden="true"></span></td>
			  </tr>
			</tbody>
		</table>
	</div> <!-- features / table -->
	
	<!-- MOBILE PRICING -->
	<div class="container mobile-pricing display-none">
		<div class="rp-sb-wrapper">
			<h2 class="purple-text">RizePoint Small Business</h2>
			<div class="rp-feature-list rp-sb-features">
				<ul>
					<li>Industry-Standard, Best Practice Audit Forms</li>
					<li>Personalized Audit Forms</li>
					<li>Mobile App Offline Operation</li>
					<li>Operate Mobile App in Web Browser</li>
					<li>File/Video/Image Attachments</li>
					<li>Rich Text Editing</li>
					<li>Digital Signature</li>
					<li>Comment Capture</li>
					<li>Thermocouple Integration</li>
					<li>Corrective Action Management</li>
					<li>Roles and Permissions</li>
					<li>Active Home Page</li>
					<li>Standard Audit Feedback Report</li>
					<li>Management Dashboard</li>
					<li>System Training</li>
					<li>Online Support</li>
				</ul>
			</div>
		</div><!-- rp-sb-wrapper -->
		<div class="rp-e-wrapper">
			<h2 class="green-text">RizePoint Enterprise</h2>
			<div class="rp-feature-list rp-e-features">
				<ul>
					<li>Industry-Standard, Best Practice Audit Forms</li>
					<li>Personalized Audit Forms</li>
					<li>Mobile App Offline Operation</li>
					<li>Operate Mobile App in Web Browser</li>
					<li>File/Video/Image Attachments</li>
					<li>Rich Text Editing</li>
					<li>Digital Signature</li>
					<li>Comment Capture</li>
					<li>Thermocouple Integration</li>
					<li>Corrective Action Management</li>
					<li>Roles and Permissions</li>
					<li>Active Home Page</li>
					<li>Standard Audit Feedback Report</li>
					<li>Management Dashboard</li>
					<li>System Training</li>
					<li>Online Support</li>
					<li>Search-Drive Analytics</li>
					<li>Audit Form Creation</li>
					<li>Audit Scheduling</li>
					<li>One-click Start from Schedule</li>
					<li>Automated Communication Tools</li>
					<li>API Support</li>
					<li>Import/Export Tools</li>
					<li>Surveys</li>
					<li>Approval Configurations</li>
					<li>Routing Configurations</li>
				</ul>
			</div>
		</div><!-- rp-e-wraper -->
	</div>

	<div class="cta-pricing-btn">
		<a href="<?php echo ROOT_URL; ?>/pricing-form/?utm_campaign=pricing" class="btn btn-width-lg btn-orange">Get Started Now</a>
	</div><!-- banner-btns -->

	<div id="spec-details"></div>
	
	<div class="container-fluid lightGray-bg">
		<div class="container pricing-specs">
			<div class="pricing-specs-wrapper">
				<h4 class="purple-text">RizePoint Small Business</h4>
				<span>RizePoint Small Business accommodates up to 20 audits per year, per location. Available to businesses with a minimum of 5 locations.</span>
				<span><i>(Paid annually. Renewed automatically.)</i></span>
			</div><!--price-box-text-->
			<div class="pricing-specs-wrapper">
				<h4 class="green-text">RizePoint Enterprise</h4>
				<span><b>Call for pricing</b> Meeting your unique quality management system needs and configuration requirements is our specialty. Contact RizePoint today to learn more.</span>
			</div><!--price-box-text-->
		</div>
	</div>
	
				
</div><!--container-fluid-->


<!-- HOME VIDEO MODAL -->
<div class="modal fade" id="homeVideo" tabindex="-1" role="dialog" aria-labelledby="homeVideoLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="homeVideoLabel">Allow Us To Introduce Ourselves</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/in3fdjpcii.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_in3fdjpcii videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
			<div class="modal-footer">
				<a href="<?php echo ROOT_URL; ?>/request-a-demo" class="btn btn-green btn-medium">Request A Demo</a>
			</div>
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<?php get_footer(); ?>









