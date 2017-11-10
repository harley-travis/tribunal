<?php
/*
Template Name: unsubscribe
*/
get_header(); ?>

<div class="container-fluid green-yellow">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="container-fluid unsub-head wrap push">
	<div class="container unsub-cont">
		<div class="col-md-12 col-sm-12 col-xs-12 col-left">
			<h2 class="heading-2"><?php the_field('sub_heading'); ?></h2>
			<p><?php the_field('the_content'); ?></p>
			
			<div id='lpeCDiv_3394' class='lpeCElement Unsubscribe_form'><span class='lpContentsItem formSpan'>
				<script src="/js/forms2/js/forms2.min.js"></script>
				<form class="mktoForm" id="mktoForm_1">
				</form>
		</div>
	</div><!--container-->
</div><!--support-head-->

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript" src="//munchkin.marketo.net//munchkin-beta.js"></script><script>Munchkin.init('318-YYG-377', {customName: 'UnsubscribePage', wsInfo: 'j1RR'});</script>

