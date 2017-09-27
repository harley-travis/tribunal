<?php
/*
	Template Name: Brand Experience
*/
get_header(); ?>

<style>
	.brand-body{
		background-color: #fafafa;
	}
	.brand-banner{
		background: #28b29a;
		background: -moz-linear-gradient(-45deg, #28b29a 0%, #59bec9 100%);
		background: -webkit-linear-gradient(-45deg, #28b29a 0%, #59bec9 100%);
		background: linear-gradient(135deg, #28b29a 0%, #59bec9 100%);
		height: 315px;
		width: 100%;
	}
	.brand-banner-wrapper {
    text-align: left;
    padding-top: 100px;
    max-width: 890px;
    margin: 0;
    padding-left: 100px;
}
	.brand-banner-wrapper h1{
		padding-bottom: 35px;
	}
	.brand-banner-wrapper h1, .brand-banner-wrapper h2{
		color: white;`
	}
	.brand-btn-wrapper{
		margin-top: 35px;
	}
	.be-wp-btn{
		background: white;
		padding: 10px 30px;
		color: #6B6B6B;
		border-radius: 7px;
		border-bottom: 2px solid #cecaca;
	}
	.brand-try-btn{
		background: #28B29A;
		padding: 10px;
		color: #FFFFFF;
		border-radius: 7px;
		border-bottom: 2px solid darkgreen;
		padding-left: 30px;
		padding-right: 30px;
	}
	.brand-ds-btn{
		background: #fff;
		padding: 10px;
		color: #28B29A;
		border-radius: 7px;
		border-bottom: 2px solid darkgreen;
		padding-left: 30px;
		padding-right: 30px;
	}
	.brand-intro p {
       font-size: 2rem;
}
.brand-intro p, .brand-bx p {
    margin: 0 !important;
}
	
	
	.brand-bx p {
    text-align: center;
    padding: 15px;
}
	
	
	.brand-intro-wrapper {
    padding: 50px;
    background: #fafafa;
    text-align: center;
    font-size: 2rem !important;
}
img.brand-img {
    float: right;
    margin-top: -300px;
    z-index: 9;
    text-align: right;
    max-width: 640px;
    position: relative;
    width: 100%;
}
	.bx-msg {
    text-align: center;
    padding: 30px;
}
.bx-msg h2 {
    color: #28b29a;
    font-family: Gotham;
}
	
	/* icons circles */
.circle-row {
    width: 100%;
    max-width: 1170px;
    margin: 0 auto;
}
	.circle-wrapper {
    margin: 50px 0;
}

.circle-icon {
    border-radius: 50%;
    max-width: 200px;
    padding: 30px;
    box-shadow: 1px 2px 10px -6px;
    margin: 0 auto;
}
.circle-icon-img {
    width: 100%;
    max-width: 150px;
}
	.circle-heading {
    text-align: center;
    padding-top: 30px;
    font-weight: bold;
    font-size: 1.3rem;
}
.circle-text {
    text-align: center;
    padding-top: 15px;
    font-size: 1.1rem;
}
	.purple-bg{
	background-color: #A15A95;
}
	.green-bg{
	background-color: #28B29A;
}
	.orange-bg{
	background-color: #fcaf41;
}
	.brand-try-btn-wrapper {
    margin-top: 35px;
    padding-bottom: 20px;
}
	.brand-try-btn-wrapper a:hover {
		color:#fafafa;
}

.brand-bx-wrapper {
    background-image: url(https://rizepoint.com/wp-content/uploads/2017/05/geo-pattern.png);
    background-attachment: fixed;
    padding: 100px;
    background-color: white;
}
	.brand-info {
    padding: 50px 0;
}
	
.final-brand-msg {
    padding: 100px 0px 60px 0px;
    background: #fff;
    text-align: center;
    background: #28b29a;
    background: -moz-linear-gradient(-45deg, #28b29a 0%, #59bec9 100%);
    background: -webkit-linear-gradient(-45deg, #28b29a 0%, #59bec9 100%);
    background: linear-gradient(135deg, #28b29a 0%, #59bec9 100%);
    color: white;
	position: relative;
	overflow: hidden;
}
	.wp-foundation-icon {
    color: rgba(0,0,0,.1);
    font-size: 15rem;
    margin-right: 115px;
}
	.icon-position {
    position: absolute;
    bottom: -125px;
    left: 0;
}
.circle-wrapper-thing {
    padding: 50px;
    background-color: white;
}
	a.brand-try-btn:hover{
		color: #006400;
	}

.arby-brand {
    background-image: url(https://rizepoint.com/wp-content/uploads/2017/05/arbys-int.jpg);
    background-size: cover;
    background-position: 50% 0;
    background-attachment: fixed;
    background-repeat: no-repeat;
    box-shadow: 1px -1px 15px black inset;
}
.arby-brand-container {
    text-align: center;
    color: white;
    background: rgba(0, 0, 0, 0.4);
    padding: 70px;
    border-radius: 7px;
	max-width: none;
}
	.arby-brand-container p {
    font-weight: bold;
    padding: 35px 0 35px 0;
}
	.flood{
		padding: 50px 0 35px 0;
	}
	.wp-try-btn {
    background: #fff;
    padding: 10px;
    color: #28b29a;
    border-radius: 7px;
    border-bottom: 2px solid #676060;
    padding-left: 30px;
    padding-right: 30px;
}
	a.wp-try-btn:hover{
    color: #676060;
}
	img.bx-logo {
    width: 100%;
    max-width: 350px;
}
	.bx-infographic {
    background: white;
    padding: 50px;
    text-align: center;
}
	img.bx-icon {
    width: 100%;
    max-width: 102px;
    padding-left: 35px;
}
	img.bx-info-img {
    width: 100%;
    max-width: 1000px;
}
	img.brand-section-icon {
    width: 100%;
}

	.vot{
		padding-top: 60px;
	}
.circle-mask {
    border-radius: 50%;
    height: 350px;
    width: 100%;
    max-width: 350px;
    background-size: cover;
    overflow: hidden;
    border: 5px solid;
    background-repeat: no-repeat;
    position: relative;
    background-position: 50%;
}
	.circle-img-one{
		border-color: #FAAD41;
		background-image: url(https://rizepoint.com/wp-content/uploads/2017/05/voq-hardhats.jpg);
	}
	.circle-img-two{
		border-color: #FFD88A;
		background-image: url(https://rizepoint.com/wp-content/uploads/2017/05/voe-barista.jpg);
	}
	.circle-img-three{
		border-color: #F5893D;
		background-image: url(https://rizepoint.com/wp-content/uploads/2017/05/voc-couple.jpg);
	}
	.bx-left {
    text-align: center;
}
img.arby-brand-img {
    max-width: 250px;
}
	.small-brand{
		display: none;
	}
	
	.datasheet-bx {
    background: white;
}
	.datasheet-bx-wrapper {
    padding: 100px;
}
	.ds-bx-content {
    text-align: center;
}
	.bx-brand-btn-side {
    text-align: center;
    margin-top: 55px;
}
	.ds-bx-content, h3 {
    text-align: center;
    font-family: Gotham;
}
.small-12.columns p {
    font-size: 17px !important;
    margin-top: 25px !important;
}
	
	
	
	
	@media only screen and (max-width: 768px){
		.brand-banner-wrapper {
			text-align: center;
			padding-top: 0;
			padding-left: 0;
			padding: 100px 15px 100px 15px;
		}
		img.brand-img {
			float: none;
			margin-top: -195px;
			text-align: center;
		}
		.brand-img-wrapper {
			text-align: center;
		}
		img.bx-logo {
    padding-bottom: 50px;
}

				.bx-brand-btn-side {
    margin-top: 10px;
    margin-bottom: 55px;
}
				.large-brand {
    display: none;
}
		.small-brand{
			display: block;
		}
		.vot {
    padding-top: 0;
}
		.circle-mask{
			margin: 0 auto;
		}
		.brand-info {
    text-align: center;
}
		.flood {
    padding: 50px 0 0 0;
}
		.brand-info p {
    padding: 35px 0;
}
		.final-brand-msg-left {
    text-align: center;
}
		.final-brand-msg-left p, .ds-bx-content p {
    padding: 35px 0;
}
		
	}
	@media only screen and (max-width: 425px){
		.brand-banner-wrapper {
    padding: 50px 15px 100px 15px;
}
img.brand-img {
    margin-top: -165px;
}
		.brand-bx-wrapper {
    padding: 35px;
}
		img.bx-logo {
    max-width: 350px;
}
		.circle-mask {
			height: 320px;
			margin: 0 auto;
		}
		.brand-info {
    padding: 35px;
    text-align: center;
}
		.vot:first-child {
    padding-top: 0;
}
		img.bx-icon {
    padding-left: 0;
    padding: 35px 0 0 0;
}

		.wp-foundation-icon {
    display: none;
}
		.datasheet-bx-wrapper {
    padding: 15px;
}
.final-brand-msg {
    padding: 35px 0px 35px 0px;
}
		
	}
	@media only screen and (max-width: 375px){
img.brand-img {
    margin-top: -315px;
}
		.brand-bx-wrapper {
    padding: 15px;
}
		.arby-brand-container {
    padding: 35px;
}
		.bx-msg {
    padding: 15px;
}
		img.bx-icon {
    padding-left: 0;
    margin: 20px;
}
		.circle-wrapper-thing {
    padding: 15px;
}
		.brand-info {
    padding: 15px;
}
		.circle-mask {
    height: 300px;
}
	}
	
	
	@media only screen and (max-width: 320px){
	.circle-mask {
    height: 230px;
}
	}
	
</style>



<div class="container-fluid blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Brand Experience</h1>
			<h3>Create a Powerful Brand Experience, Inside and Out.</h3>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="brand-body wrap push">

	<div class="container brand-content-wrapper">
		<div class="brand-img-wrapper">
			<img src="https://rizepoint.com/wp-content/uploads/2017/05/rizepoint-bx-logo-transparent.png" class="brand-img" alt="RizePoint Brand Experience">
		</div><!-- brand-img-wrapper -->
	</div><!-- brand-content-wrapper -->
	
	<div class="container-fluid brand-intro-wrapper">
		<div class="container">
			<div class="brand-intro">
				<p>The RizePoint Brand Experience&trade; platform seamlessly integrates and correlates operational data with experiential data, providing visibility into every aspect of your brand experience, end-to-end.</p>
			</div><!-- brand-intro -->
		</div><!-- row -->
	</div><!-- brand-intro-wrapper -->
	
	<div class="container-fluid brand-bx-wrapper">
		<div class="container">
			<div class="brand-bx">
				<div class="col-lg-4 col-md-12 col-sm-12 bx-left">
					<img src="https://rizepoint.com/wp-content/uploads/2017/04/bx-img.png" class="bx-logo" alt="">
				</div><!-- bx-left -->
				<div class="col-lg-8 col-md-12 col-sm-12 bx-left">
					<p>By unifying Voice of Quality with Voice of Employee and Voice of Customer, RizePoint uniquely closes the intelligence loop – whether the data is sourced inside-out, inside-up, or outside-in. </p>
				</div><!-- bx-left -->
			</div><!-- brand-bx -->
		</div><!-- row -->
	</div><!-- brand-bx-wrapper -->
	
	<div class="container-fluid arby-brand">
		<div class="container arby-brand-container">
			<div class="">
			<img src="https://rizepoint.com/wp-content/uploads/2015/12/logo-arbys-e1449709681898.png" class="arby-brand-img" alt="">
				<p>Learn how Arby’s combines VOC and VOQ data to drive operational excellence and achieve 25 consecutive quarters of sales growth.</p>
				<div class="arby-cs-btn-wrapper">
					<a href="https://rizepoint.com/wp-content/uploads/2017/08/Arbys-Case-Study_RizePoint_FINAL.pdf" target="_blank" class="brand-try-btn">Arby's Case Study</a>
				</div><!-- arby-cs-btn-wrapper -->
			</div><!-- row -->
		</div><!-- arby-brand-container -->
	</div><!-- arby-brand -->
	
	<div class="container-fluid bx-infographic">
		<div class="container bx-infographic-wrapper">
			<div class="">
				<img src="https://rizepoint.com/wp-content/uploads/2017/05/bx-rizepoint-infogrpahic-min.jpg" class="bx-info-img" alt="">
			</div><!-- row -->
		</div><!-- bx-infographic-wrapper -->
	</div><!-- bx-infograpnic -->
	
	<div class="container-fluid flood">
		<div class="container flood-wrapper">
			<div class="">
				<div class="bx-msg">
					<h2>Floods of Feedback Transform into BX Intelligence</h2>
				</div><!-- bx-msg -->
			</div><!-- row -->
		</div><!-- flood-wrapper -->
	</div><!-- flood -->
	
	<div class="container-fliud brand-info">
		<div class="container">
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot">Voice of Quality <img src="https://rizepoint.com/wp-content/uploads/2017/05/voq-logo.png" class="bx-icon" alt=""></h3>
				<p>Gathering and managing quality standards inside your organization through site evaluations and compliance activities is key to ensuring your customers have a positive experience.</p>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-one"></div>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->

	<!-- show when large -->
	<div class="container-fliud brand-info large-brand">
		<div class="container">
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-two"></div>
			</div>
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot">Voice of Employee <img src="https://rizepoint.com/wp-content/uploads/2017/05/voe-logo.png" class="bx-icon" alt=""></h3>
				<p>It’s also critical to channel employee feedback up your organization’s chain of command so you can proactively address issues before they impact your brand reputation.</p>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->
	
	<!-- show when small -->
	<div class="container-fliud brand-info small-brand">
		<div class="container">
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot">Voice of Employee <img src="https://rizepoint.com/wp-content/uploads/2017/05/voe-logo.png" class="bx-icon" alt=""></h3>
				<p>It’s also critical to channel employee feedback up your organization’s chain of command so you can proactively address issues before they impact your brand reputation.</p>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-two"></div>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->
	
	<div class="container-fliud brand-info">
		<div class="container">
			<div class="col-lg-6 col-md-7 col-sm-12">
				<h3 class="vot">Voice of Customer <img src="https://rizepoint.com/wp-content/uploads/2017/05/voc-logo.png" class="bx-icon" alt=""></h3>
				<p>Adding customer perceptions to the awareness you’ve gained from quality activities and employee feedback provides a comprehensive view into your brand experience.</p>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-12">
				<div class="circle-mask circle-img-three"></div>
			</div>
		</div><!-- row -->
	</div><!-- brand-info -->
	
	<div class="container-fluid datasheet-bx">
		<div class="container datasheet-bx-wrapper">
			<div class="">
			
				<div class="col-lg-6 col-sm-12 final-brand-msg-left">
					<h3>COMPLIMENTARY WHITEPAPER DOWNLOAD</h3>
					<p>In today’s experience economy, brand power comes not only from the direct experience the customer has with your company, but also from the meticulous work that happens before the customer even steps foot in the door. Learn more about best practices in Brand Experience management in this free whitepaper.</p>
				</div><!-- final-brand-msg-left -->
				<div class="col-lg-6 col-sm-12 final-brand-msg-right">
					<script src="//app-ab09.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_488"></form>
					<script>MktoForms2.loadForm("//app-ab09.marketo.com", "318-YYG-377", 488);</script>
				</div><!-- final-brand-msg-right -->

			</div><!-- row -->
		</div><!-- datasheet-bx-wrapper -->
	</div><!-- datasheet-bx -->

	<div class="container-fluid final-brand-msg">
		<div class="container">
			<div class="">
			
				<div class="ds-bx-content">
					<h3 style="color: white; font-weight: bold;">Brand Experience Datasheet</h3>
					<p>You need complete visibility into company data to build a strong business and drive strategy. Learn how RizePoint helps you gather, monitor, and act on data from operations, employees, and customers to master the experience economy. Download your complimentary datasheet today.</p>
				</div><!-- ds-bx-content -->
				<div class="bx-brand-btn-side">
					<a href="https://rizepoint.com/wp-content/uploads/2017/05/Brand-Experience-Datasheet_RizePoint_FINAL.pdf" target="_blank" class="brand-ds-btn">Download Datasheet</a>
				</div>
				
			</div><!-- row -->
		</div><!-- container -->
		<div class="icon-position">
			<i class="fi-page wp-foundation-icon"></i>
		</div>
	</div><!-- final-brand-msg -->
</div><!-- brand-boddy -->

<?php get_footer(); ?>
