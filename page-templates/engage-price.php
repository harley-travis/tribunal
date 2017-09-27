<?php
/*
	Template Name: Engage-Price
*/
get_header(); ?>
<style>
	.lg-text-junk-wrapper h2{
		text-align: center;
	}
	.panel-section{
		margin-bottom: 35px;
		padding: 15px;
	}
	.e2018-banner {
    position: relative;
    height: 645px;
    overflow: hidden;
}
	
	.e2018-banner-wrapper h1{
		color: white;
		font-family: Gotham;
		font-weight: 900;
		font-size: 5rem;
	}
	.e2018-banner-wrapper h2{
		color: white;
		font-weight: 600;
	}
	.e2018-banner-wrapper h3 {
    background: white;
    border: 1px solid white;
    width: 100%;
    max-width: 200px;
    margin: 0 auto;
    border-radius: 7px;
    font-size: 1.1rem;
    padding: 10px;
		margin-top: 35px;
		border-bottom: 2px solid #cecaca;
}
	
video#vid-bg {
    width: 100%;
    height: auto;
}
	.engage-vid-bg {
}

	.e2018-banner-wrapper {
    position: absolute;
    top: 25%;
    left: 0;
    right: 0;
    color: white;
    font-size: 3rem;
    text-align: center;
}
	
	
	.e2018-venue{
		background-image: url(https://rizepoint.com/wp-content/uploads/2017/04/mirage-engage.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: 50% 0;
		background-attachment: fixed;
		box-shadow: 1px -1px 15px black inset;
	}
	.e2018-venue-wrapper {
		color: #fff;
		text-align: center;
		padding: 100px;
}
	
	.e2018-venue-wrapper a:hover{
		color: #FCB040;
		text-decoration: underline;
		}
	
	.e2018-venue-wrapper a{
		color: white;
		text-decoration: underline;
		}
	
	.e2018-venue-wrapper h2{
		color: #fff;
		font-weight: 900;
		text-shadow: 1px 1px 10px black;
		}
	.e2018-venue-wrapper p{
		text-shadow: 1px 1px 10px black;
	}
	.agenda-icon {
    	font-size: 2rem;
}
	.sun-icon {
    	color: #FCB040;
}
	.sunset-icon {
		height: 16px;
		overflow: hidden;
		color: #F4C540;
}
	.e2018-agenda{
		padding: 50px;
	}
	.e2018-agenda-wrapper {
    	padding: 30px 0 60px 0;
}
	.e2018-agenda-wrapper h2{
		padding-bottom: 35px;
		text-align: center;
}
	
	.e2018-testimony {
		height: auto;
		background: #fafafa;
		background-image: url(https://rizepoint.com/wp-content/uploads/2017/05/geo-pattern.png);
		padding: 0;
		margin: 0;
		background-attachment: fixed;
	}
	.e2018-testimony h4{
		line-height: inherit;
	}
	
	.table{
		width: 100%;
		max-width: 100%;
	}
	
	td.agenda-event {
		background: #28B29A;
		margin: 1px;
		text-align: center;
		border: 10px solid white;
		color: white;
		padding: 10px;
}
	.engage-schedule-table th {
    text-align: left;
}
	td.empty {
		background: #eee;
		border: 10px solid white;
}
	.e-2018-info-wrapper{
		text-align: center;
		padding: 35px;
	}
	.e2018-bootcamp-wrapper {
    	padding: 50px;
}
	.e2018-bootcamp {
    	position: relative;
}
	.e2018-bootcamp-wrapper {
    	padding: 100px;
}
	.icon-position {
    position: absolute;
    right: 50px;
    bottom: -125px;
}
	.book-foundation-icon {
		font-size: 15rem;
		color: rgba(0,0,0,.1);
}
	.engage-well{
		margin-top: 10px;
	}
	ul.example-orbit-content.orbit-slides-container {
		text-align: center;
		margin-top: 85px;
}
	.orbit-container .orbit-prev, .orbit-container .orbit-next {
    	background-color: #F7D569  !important;
	}
	.orbit-container .orbit-prev:hover, .orbit-container .orbit-next:hover{
		background-color: #FCB040 !important;
	}
	.e2018-testimony-wrapper {
		text-align: center;
		padding: 60px;
}
	.book-foundation-icon {
		font-size: 15rem;
		color: rgba(0,0,0,.1);
}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
		border-top: none;
	}
	.table>thead>tr>th{
		border-bottom: 0;
	}
	.sun-icon {
    	color: #FCB040;
}
	th {
    	text-align: center;
}
	.sunset-icon {
		height: 16px;
		overflow: hidden;
		color: #F4C540;
}
	.agenda-icon {
    	font-size: 4rem;
}
	
	.panel{
		margin:55px 0px;	
	}
	
	
	.panel-body{
		padding: 20px 0px;
	}
	
	.panel-head{
		background:#28B29A;
		padding: 10px;
	}
	
	.panel-head h1{
		font-size:4rem;
		
	}
	
	.schedule-time {
    border-bottom: 1px solid;
    margin-top: 35px;
}
	.schedule-title {
    margin-top: 35px;
}
	.schedule-content {
    padding: 10px;
}
	
	
	.display-block{
		display: block;
	}
	.display-none{
		display: none;
	}
	
	
	.early-rate-ind{
		border-bottom: 1px solid #BBBCBC;
	}
	@media only screen and (max-width: 2560px){	
			.e2018-agenda2{
		display:none;
	}

	
@media only screen and (max-width: 768px){
	.e2018-banner {
		background: linear-gradient(135deg, #e76b7c 0%, #f7d569 100%);
		height:500px;
		}

	.engage-vid-bg{
		display:none;
		}
		.e2018-agenda2{
		display:none;
	}
	
	
	.display-block{
		display: none;
	}
	.display-none{
		display: block;
	}
}

@media only screen and (max-width: 425px){
	.modal{
		width:100%;
		max-width:400px;
	}
	
	.empty{
		padding: 0px !important;
		visibility: collapse;
	}
	.empty2{
		visibility: hidden;
	}
	
	.e2018-banner {
		background: linear-gradient(135deg, #e76b7c 0%, #f7d569 100%);
		height:500px;
		}

	.engage-vid-bg{
		display:none;
		}
	
	.e2018-venue-wrapper{
		padding: 25px;
	}
	
	.e2018-bootcamp-wrapper{
		padding: 25px;
	}
	
	.e2018-testimony-wrapper{
		padding: 25px;
	}
	
	.e2018-banner-wrapper{
		top:10%
	}
	
	.e2018-agenda{
		display:none;
	}
	
	.e2018-agenda2{
	display:initial;
	}
	
}
	
@media only screen and (max-width: 320px){
	.e2018-banner {
		background: linear-gradient(135deg, #e76b7c 0%, #f7d569 100%);
		height:500px;
		}

	.engage-vid-bg{
		display:none;
		}
	
	.e2018-banner-wrapper{
		top:10%

	}
	.e2018-banner-wrapper h1{
		font-size:3rem;
	}
	.e2018-banner-wrapper h2{
		font-weight: none;
	}
}
</style>

<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Engage 2018</h1>
			<h3>Save The Date: February 6-8, 2018</h3>
			<div class="banner-btns">
				<a class="btn btn-lg btn-inverse-white" data-toggle="modal" data-target="#engage-promo">Watch The Video</a> <a href="https://rizepoint.regfox.com/engage-2018-rizepoint-user-conference" class="btn btn-lg btn-inverse-white">Register Now</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->


<!-- MODAL -->
<div class="modal fade" id="engage-promo" tabindex="-1" role="dialog" aria-labelledby="engageLabel">
	<div class="large-modal modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="engageLabel">Join us at Engage in 2018</h4>
			</div>
			<div class="modal-body">
				<script src="https://fast.wistia.com/embed/medias/vigg8wrsww.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.0% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_vigg8wrsww videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->



<div class="container-fluid e-2018-info wrap push">
	<div class="container e-2018-info-wrapper">
		<h3>Join us at Engage 2018 for three days of the best RizePoint training and insight available.</h3>
	</div><!-- e-2018-info-wrapper -->
</div><!-- e-2018-info -->

<!-- VENUE MIRAGE BACKGROUND-->
<div class="container-fluid e2018-venue wrap push">
	<div class="container e2018-venue-wrapper">
		<h2>The Mirage Las Vegas</h2>
		<p>The conference space is steps from the guest room elevators, so you won’t have to walk a mile in anyone’s shoes (unless you want to). There are tigers in the backyard, a volcano out front, luxury rooms, amazing dining venues, and top-rated amenities. Our Engage 2018 room block offers special discounted pricing: $110 per night (plus resort fee and tax). <a href="https://rizepoint.regfox.com/engage-2018-rizepoint-user-conference">Visit our secure registration page</a> to book online or get the reservation code to reserve over the phone.</p>
	</div><!-- e2018-venue-wrapper -->
</div><!-- e2018-venue -->

<!-- AGENDA  SOLID BACKGROUND-->
<div class="container-fluid e2018-agenda wrap push">
	<div class="container e2018-agenda-wrapper">
		<div class="table-agenda">
			<h2 class="green-text">The Agenda</h2>
			<table class="table hover">
				<thead>
					<tr>
						<th class="empty" colspan="1"></th>
						<th><i class="fa fa-sun-o sun-icon agenda-icon" aria-hidden="true"></i></th>
						<th><i class="fa fa-sun-o sunset-icon agenda-icon" aria-hidden="true"></i></th>
						<th><i class="fa fa-moon-o moon-icon agenda-icon" aria-hidden="true"></i></th>
					</tr>
				</thead>
				<tr>
					<td>Pre Conference</td>
					<td class="empty" colspan="1"></td>
					<td class="agenda-event">Event Registration</td>
					<td class="agenda-event">Industry Exchange Networking Dinner</td>
				</tr>
				<tr>
					<td>Boot Camp</td>
					<td class="agenda-event">Beginners &amp; Advanced Bootcamp</td>
					<td class="agenda-event">Beginners &amp; Advanced Bootcamp</td>
					<td class="agenda-event">Opening Mixer + Group Dinners</td>
				</tr>
				<tr>
					<td>Day 1</td>
					<td class="agenda-event">Keynotes &amp; Breakout Sessions</td>
					<td class="agenda-event">Breakout Sessions &amp; Meet the Experts</td>
					<td class="agenda-event">Engage Dinner + Party</td>
				</tr>
				<tr>
					<td>Day 2</td>
					<td class="agenda-event">Breakout Sessions &amp; Meet the Experts</td>
					<td class="agenda-event">Concluding Keynote &amp; Awards</td>
					<td class="empty" colspan="1"></td>
				</tr>
			</table>
		</div><!-- table-agenda -->
	</div><!-- e2018-agenda-wrapper -->
</div><!-- e2018-agenda -->

<div class="container-fluid lg-text-junk wrap push">
	<div class="container lg-text-junk-wrapper">
	<h2 id="session-descriptions" class="green-text">Session Descriptions: Engage 2018</h2>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
			  <h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  All Attendee Session
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			  <div class="panel-body">
				<div class="panel-section">
					<h3 class="green-text">Product Roadmap—a complete view of RizePoint product development plans</h3>
					<h4 class="green-text">Tim Harris, RizePoint Senior Vice President of Product</h4>
					<p>The RizePoint platform is built to enable client success. That’s why enhancements to the RizePoint platform are focused on addressing client’s current needs and laying a strong foundation for the future. Engage 2018 attendees get the latest product roadmap details in this thorough review of RizePoint product development plans. </p>
				</div>
				 <div class="panel-section">
					<h3 class="green-text">RizePoint Customer Panel Q&amp;A—RizePoint in action from the client’s view</h3>
					<h4 class="green-text"></h4>
					<p>Hear how others use the RizePoint platform to manage quality, operations, safety, brand, and supply chain standards in a customer panel only available at Engage 2018. In this popular session, experienced RizePoint users share their insights and recommendations for getting the most out of the RizePoint system. </p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  Breakout Sessions (Tech Track)
				</a>
			  </h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			  <div class="panel-body">
				<div class="panel-section">
					<h3 class="green-text">Business Intelligence Camp—the reporting rock stars return </h3>
					<h4 class="green-text">Kari Hensien, RizePoint Senior Product Manager</h4>
					<p>Sharing RizePoint data gets easier every year with the introduction of new analytical tools such as Management Dashboards, Active Home Page widgets, and Search-Driven Analytics. Become a pro at deploying insightful data to all the stakeholders in your organization in this technical, hands-on business intelligence breakout session.</p>
				</div>
				<div class="panel-section">
					<h3 class="green-text">Managing Suppliers from Start to Finish—supplier quality management made easy </h3>
					<h4 class="green-text">Sue Caniglia, RizePoint Product Manager</h4>
					<h4 class="green-text">Braden Call, RizePoint Senior Product Manager</h4>
					<p>From onboarding to supplier approval to managing supplier information, RizePoint has you covered. This technical breakout session is a complete introduction to all the RizePoint tools available today and the capabilities coming your way in the important area of supplier quality management.</p>
				</div>
				<div class="panel-section">
					<h3 class="green-text">Designing a Quality Program—new RizePoint tools help you every step of the way</h3>
					<h4 class="green-text">Kari Hensien, RizePoint Senior Product Manager</h4>
					<p>Goals. Programs. Campaigns. Activities. They all contribute to your organization’s success but can be difficult to manage in the real world. This technical session introduces the latest tools from RizePoint that help you build great audit programs, and enable the design of your quality programs from start to finish. </p>
				</div>
				<div class="panel-section">
					<h3 class="green-text">Expert Tips and Tricks—secrets from those who know RizePoint best</h3>
					<h4 class="green-text">Jeremy (JT) Thomas, RizePoint Sales Engineer</h4>
					<h4 class="green-text">Kimball Nelson, RizePoint Sales Engineer</h4>
					<p>One of the most popular Engage sessions returns with the inside scoop on how to maximize your investment in RizePoint. RizePoint experts share insider tips and answer your questions on how to get the most out of everything the RizePoint platform has to offer.</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingThree">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  Breakout Sessions (Business Track)
				</a>
			  </h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			  <div class="panel-body">
				<div class="panel-section">
					<h3 class="green-text">Brand Experience—deploying the latest in brand protection</h3>
					<h4 class="green-text">Tim Harris, RizePoint Senior Vice President of Product</h4>
					<p>Creating a world-class brand experience requires a company-wide approach to ensure every touchpoint is worthy of a 5-star rating. This breakout session looks at the benefits of correlating voice-of-customer (VOC) and voice-of-employee (VOE) data with your RizePoint quality results to gain insights that will drive an outstanding brand experience.</p>
				</div>
				<div class="panel-section">
					<h3 class="green-text">Putting RizePoint Staff to Work for You—an introduction to RizePoint professional services</h3>
					<h4 class="green-text">Gary Ashcraft, RizePoint Senior Director of Customer Success</h4>
					<p>There are many ways RizePoint team members can contribute to the success of your organization. Learn about the professional services offered by RizePoint and gain a full understanding of how those services will benefit your operations and team. From seasoned RizePoint users or team members new to the system, the professional services team is designed to increase your success.</p>
				</div>
				<div class="panel-section" id="section-3">
					<h3 class="green-text">Supplier Management Best Practices—a practical approach to managing your global supply chain</h3>
					<h4 class="green-text">Braden Call, RizePoint Senior Product Manager</h4>
					<p>This breakout session goes beyond product functionality to uncover best practices in managing the many aspects of a global supply chain. From sustainability to responsible sourcing to records management, you will discuss the how’s, why’s and what-if’s of supplier management.</p>
				</div>
				<div class="panel-section">
					<h3 class="green-text">Global Empowerment—an exploration of RizePoint international use cases</h3>
					<h4 class="green-text"></h4>
					<p>The RizePoint system is renowned for its ability to meet the different needs of many user types. This business-focused session travels the globe to discover the unique uses of the RizePoint platform, showcasing how it helps manage safety, quality, and brand standards for users around the world.</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div><!-- lg-text-junk-wrapper -->
</div>

<!--mobile agenda-->
<div class="container-fluid e2018-agenda2 wrap push">
	<div class="container e2018-agenda-wrapper2">
		<div class="table-agenda2">
			<h2>The Agenda</h2>
			<table class="table hover2">
				
					<tr class="pre-conf">
						<td>Pre Conference</td>
					</tr>
						<tr>
						<td class="empty" colspan="1"></td>
						</tr>
						<tr>
							<th><i class="fa fa-sun-o sunset-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Event Registration</td>
						</tr>
						<tr>
							<th><i class="fa fa-moon-o moon-icon agenda-icon" aria-hidden="true"></i></th>
						</tr>
					<tr>
						<td class="agenda-event">Industry Exchange Networking Dinner</td>
					</tr>
					<tr>
						<td class="empty2" colspan="1"></td>
					</tr>
					<tr>
						<td class="empty2" colspan="1"></td>
					</tr>
				

					<tr class="pre-conf">
						<td>Boot Camp</td>
					</tr>
						<tr>
							<th><i class="fa fa-sun-o sun-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Beginners &amp; Advanced Bootcamp</td>
						</tr>
						<tr>
							<th><i class="fa fa-sun-o sunset-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Beginners &amp; Advanced Bootcamp</td>
						</tr>
						<tr>
							<th><i class="fa fa-moon-o moon-icon agenda-icon" aria-hidden="true"></i></th>
						</tr>
					<tr>
						<td class="agenda-event">Opening Mixer + Group Dinners</td>
						<tr>
							<td class="empty2" colspan="1"></td>
						</tr>
						<tr>
							<td class="empty2" colspan="1"></td>
						</tr>


					<tr class="pre-conf">
						<td>Day 1</td>
					</tr>
						<tr>
							<th><i class="fa fa-sun-o sun-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Keynotes &amp; Breakout Sessions</td>
						</tr>
						<tr>
							<th><i class="fa fa-sun-o sunset-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Breakout Sessions &amp; Meet the Experts</td>
						</tr>
						<tr>
							<th><i class="fa fa-moon-o moon-icon agenda-icon" aria-hidden="true"></i></th>
						</tr>
					<tr>
						<td class="agenda-event">Engage Dinner + Party</td>
						<tr>
							<td class="empty2" colspan="1"></td>
						</tr>
						<tr>
							<td class="empty2" colspan="1"></td>
						</tr>

				

					<tr class="pre-conf">
						<td>Day 2</td>
					</tr>
						<tr>
							<th><i class="fa fa-sun-o sun-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Breakout Sessions &amp; Meet the Experts</td>
						</tr>
						<tr>
							<th><i class="fa fa-sun-o sunset-icon agenda-icon" aria-hidden="true"></i></th>
							</tr>
						<tr>
						<td class="agenda-event">Concluding Keynote &amp; Awards</td>
						</tr>

					<tr>
						<td class="empty" colspan="1"></td>
					</tr>

			</table>
		</div><!-- table-agenda -->
	</div><!-- e2018-agenda-wrapper -->
</div><!-- e2018-agenda -->

<!-- TESTIMONIALS  GEO BG-->
<div class="container-fluid e2018-testimony wrap push">
	<div class="container e2018-testimony-wrapper">
	<h4>“The Engage conference exceeded my expectations. Humor and enjoyment foster collaboration throughout the event. There is a whole new energy at RizePoint. The people are dynamic with a great, family-like atmosphere. Plus, it was neat to get a glimpse into the very precise and determined RizePoint road map.”</h4><br>
      <h5>Robin Gough-OBrien
Sr. Director Operations Services 
Checkers Drive In Restaurants, Inc. </h5>

	</div><!-- e2018-testimony-wrapper -->
</div><!-- e2018-testimony -->

<!-- BOOT CAMP SOLID COLOR-->
<div class="container-fluid e2018-bootcamp wrap push">
	<div class="container e2018-bootcamp-wrapper">
		<h2 class="green-text" id="bootcamp">Free Boot Camp</h2>
		<p>Boot camps are back for Engage 2018 and they’re better than ever. We incorporated your feedback from last year, and have come back with mix-and-match boot camps covering a wide range of needs and experience levels. Plus, boot camp attendance is included free in the cost of your registration!</p>
		<p>Take advantage of a full day of in-depth product training on Feb. 6 before the main conference begins. This year we’ve created two tracks: Core Features, which will cover primary product functionality and best practice information and refreshers; and Maximize Value, which will help you uncover hidden gems or underused tools within your implementation, in addition to deep dives on features. Decide which topics and experience levels best serve your needs by building your own schedule throughout the day. And the popular Mobile Auditor scavenger hunt is back—this time bringing together all boot camp attendees for a one-of-a-kind experience!</p>
		
		<div class="bootcamp-schedule display-block">
			<a class="btn btn-purple" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Click to Expand Boot Camp Schedule
			</a>
			<div class="collapse" id="collapseExample">
				<div class="well engage-well">
					<table class="table engage-schedule-table">
						<tr>
							<th>Time</th>
							<th>Core Features</th>
							<th>Experience Level</th>
							<th>Maximize Value</th>
							<th>Experience Level</th>
						</tr>
						<tr>
							<td>9 - 10:30am</td>
							<td>
								<b>Corrective Action Management</b><br>
								<span>Corrective action is the backbone creating a continuous improvement process. Ensure your CAM process is correctly aligned with your full RizePoint implementation. Whether you are learning for the first time or need a refresher, this session covers how to configure CAM workflows to ensure brand standards are followed at every level, and walks through the CAM set up and approval process.</span>
							</td>
							<td><span>Beginner/Intermediate</span></td>
							<td>
								<b>Dashboard Deep Dive</b><br>
								<span>Gain a full understanding of Management Dashboard reporting in this in-depth module. You will understand what each graph says, why it’s important, how to drill into different reports, and which pieces of data correlate for a more insightful view into what the data says about your business. Then learn how to provide trend reports to all levels of access.</span>
							</td>
							<td>Advanced</td>
						</tr>
						<tr>
							<td>10:45am - 12pm</td>
							<td>
								<b>Search-Driven Analytics</b><br>
								<span>Learn more about the new RizePoint tool that lets you build comprehensive, ad-hoc reporting. Learn how to integrate data from external sources with your RizePoint data, build reports that speak to your unique business needs, and understand how SDA empowers you to become your own data scientist. In real-time use case demonstrations, you will learn how to build robust reports for different industries and assign to users within your internal hierarchies.</span>
							</td>
							<td><span>Intermediate</span></td>
							<td>
								<b>Program Compliance</b><br>
								<span>Take control of programs outside of your typical audit process. Learn about the benefits of doing program compliance within the RizePoint platform, how to set up a program, and come away with an easy user guide to walk you through the program compliance set-up process. This session includes real-life situations managed with program compliance such as product recalls, compliance certification, and company-wide facility updates.</span>
							</td>
							<td>Beginner</td>
						</tr>
						<tr>
							<td>1pm - 2pm</td>
							<td>
								<b>Relationships</b><br>
								<span>In this session, you’ll learn how to effectively manage the relationship between users, forms, locations, roles, and management in ways that simplify the administration of your site. Implementing robust relationship management within RizePoint creates a more efficient operations process, and maintains stronger data integrity.</span>
							</td>
							<td><span>Beginner</span></td>
							<td>
								<b>Scheduling</b><br>
								<span>Learn how to use scheduling to your advantage with internal or external audits. This scheduling module refresher is a hands-on look at how to manage your schedule with a third-party auditor, as well as how to use scheduling to make your internal team run more efficiently (including ensuring auditors are aware of schedules).</span>
							</td>
							<td>Intermediate</td>
						</tr>
						<tr>
							<td>2:15pm - 3:30pm</td>
							<td>
								<b>Mobile Auditor Scavenger Hunt</b><br>
								<span>Get to know Mobile Auditor like the back of your hand with a fun casino scavenger hunt. Discover features you may not be using and find new ways to use features you’re familiar with.</span>
							</td>
							<td></td>
							<td></td>
							<td>Beginner</td>
						</tr>
						<tr>
							<td>3:45pm - 5pm</td>
							<td>
								<b>Form Configuration</b><br>
								<span>This session is a thorough look at how to efficiently set up forms to best meet your needs. Get expert tips on how different form configurations will help you lay the foundation for stronger reporting and corrective action through tools like report categories and category ratings.</span>
							</td>
							<td><span>Intermediate/Advanced</span></td>
							<td>
								<b>Waivers</b><br>
								<span>The waivers feature in RizePoint is a great way to take regional differences into account while maintaining the integrity of your auditing process and data. In this session, you’ll learn how to set up waivers within your RizePoint implementation, and enable location managers to request exemptions from certain standards, so you get the most tailored fit between audit and location.</span>
							</td>
							<td>Beginner</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="schedule-mobile display-none">
			<div class="schedule-mobile-wrapper">
			
			<a class="btn btn-purple" role="button" data-toggle="collapse" href="#collapseMobile" aria-expanded="false" aria-controls="collapseMobile">
			Click to Expand Boot Camp Schedule
			</a>
			<div class="collapse" id="collapseMobile">
				<div class="well engage-well">
			
				<div class="schedule-row">
					<div class="schedule-time green-text">
						<h4>9 - 10:30am</h4>
					</div>
					<div class="schedule-title purple-text">
						<h4>Core Features</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Corrective Action Management</b><br>
						<span>Corrective action is the backbone creating a continuous improvement process. Ensure your CAM process is correctly aligned with your full RizePoint implementation. Whether you are learning for the first time or need a refresher, this session covers how to configure CAM workflows to ensure brand standards are followed at every level, and walks through the CAM set up and approval process.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Beginner/Intermediate</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Maximize Value</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Dashboard Deep Dive</b><br>
						<span>Gain a full understanding of Management Dashboard reporting in this in-depth module. You will understand what each graph says, why it’s important, how to drill into different reports, and which pieces of data correlate for a more insightful view into what the data says about your business. Then learn how to provide trend reports to all levels of access.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Advanced</span>
					</div>
				</div>
				
				<div class="schedule-row">
					<div class="schedule-time green-text">
						<h4>10:45am - 12pm</h4>
					</div>
					<div class="schedule-title purple-text">
						<h4>Core Features</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Search-Driven Analytics</b><br>
						<span>Learn more about the new RizePoint tool that lets you build comprehensive, ad-hoc reporting. Learn how to integrate data from external sources with your RizePoint data, build reports that speak to your unique business needs, and understand how SDA empowers you to become your own data scientist. In real-time use case demonstrations, you will learn how to build robust reports for different industries and assign to users within your internal hierarchies.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Intermediate</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Maximize Value</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Program Compliance</b><br>
						<span>Take control of programs outside of your typical audit process. Learn about the benefits of doing program compliance within the RizePoint platform, how to set up a program, and come away with an easy user guide to walk you through the program compliance set-up process. This session includes real-life situations managed with program compliance such as product recalls, compliance certification, and company-wide facility updates.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Beginner</span>
					</div>
				</div>
				
				<div class="schedule-row">
					<div class="schedule-time green-text">
						<h4>1pm - 2pm</h4>
					</div>
					<div class="schedule-title purple-text">
						<h4>Core Features</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Relationships</b><br>
						<span>In this session, you’ll learn how to effectively manage the relationship between users, forms, locations, roles, and management in ways that simplify the administration of your site. Implementing robust relationship management within RizePoint creates a more efficient operations process, and maintains stronger data integrity.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Beginner</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Maximize Value</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Scheduling</b><br>
						<span>Learn how to use scheduling to your advantage with internal or external audits. This scheduling module refresher is a hands-on look at how to manage your schedule with a third-party auditor, as well as how to use scheduling to make your internal team run more efficiently (including ensuring auditors are aware of schedules).</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Intermediate</span>
					</div>
				</div>
				
				<div class="schedule-row">
					<div class="schedule-time green-text">
						<h4>2:15pm - 3:30pm</h4>
					</div>
					<div class="schedule-title purple-text">
						<h4>Core Features</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Mobile Auditor Scavenger Hunt</b><br>
						<span>Get to know Mobile Auditor like the back of your hand with a fun casino scavenger hunt. Discover features you may not be using and find new ways to use features you’re familiar with.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Beginner</span>
					</div>
				</div>
				
				<div class="schedule-row">
					<div class="schedule-time green-text">
						<h4>3:45pm - 5pm</h4>
					</div>
					<div class="schedule-title purple-text">
						<h4>Core Features</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Form Configuration</b><br>
						<span>This session is a thorough look at how to efficiently set up forms to best meet your needs. Get expert tips on how different form configurations will help you lay the foundation for stronger reporting and corrective action through tools like report categories and category ratings.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Intermediate/Advanced</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Maximize Value</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<b>Waivers</b><br>
						<span>The waivers feature in RizePoint is a great way to take regional differences into account while maintaining the integrity of your auditing process and data. In this session, you’ll learn how to set up waivers within your RizePoint implementation, and enable location managers to request exemptions from certain standards, so you get the most tailored fit between audit and location.</span>
					</div>
					<div class="schedule-title purple-text">
						<h4>Experience Level</h4>
					</div>
					<div class="schedule-content lightGray-bg">
						<span>Beginner</span>
					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	</div><!-- e2018-bootcamp-wrapper -->
	<div class="icon-position">
		<i class="fi-book book-foundation-icon"></i>
	</div>
</div><!-- e2018-bootcamp -->


<!-- TESTIMONIALS  GEO BG-->
<div class="container-fluid e2018-testimony wrap push">
	<div class="container e2018-testimony-wrapper">
			<div class="panel panel-default">
		  <div class="panel-head">
			<h1 class="panel-title lightGray-text">Engage Pricing</h1>
		  </div>
		  
		  <div class="panel-body">
			<div class="col-md-6 col-sm-12 col-xs-12 early-price">
			<div class="early-rate-ind">
				<h3 class="green-text">Early Bird Rate</h3>
				<h4>August 1-October 31</h4>
				<h4>(midnight PDT)</h4>
				<p><i>Includes free boot camp</i></p>
			</div><!--early-bird-ind-->
			<div class="price-title">
				<h3>Individual</h3>
			</div><!--price-->
			<div class="price">
				<h4>$799</h4>
			</div>
			
			<div class="price-title">
				<h3>Group Discount (3+)</h3>
			</div><!--price-->
			<div class="price">
				<h4>$639</h4>
			</div>
				
			</div><!--early-price-->
			<div class="col-md-6 col-sm-12 col-xs-12 regular-price">
			<div class="early-rate-ind">
				<h3 class="green-text">Regular Rate</h3>
				<h4>November 1-February 31</h4>
				<h4>(midnight PDT)</h4>
				<p><i>Includes free boot camp</i></p>
			</div><!--regular-rate-->
			<div class="price-title">
				<h3>Individual</h3>
			</div><!--price-->
			<div class="price">
				<h4>$999</h4>
			</div>
			
			<div class="price-title">
				<h3>Group Discount (3+)</h3>
			</div><!--price-->
			<div class="price">
				<h4>$799</h4>
			</div>
			
			</div><!--regular-price-->
		  </div>
		</div>
		
		<a href="https://rizepoint.regfox.com/engage-2018-rizepoint-user-conference" class="btn btn-lg btn-green">Register Now</a>

	</div><!-- e2018-testimony-wrapper -->
</div><!-- e2018-testimony -->


<?php get_footer(); ?>
