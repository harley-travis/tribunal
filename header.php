<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<title>Home | RizePoint</title>
		
		<?php require_once(dirname(__FILE__)."/config.php"); ?>
		
		<!-- meta -->
		<meta charset="utf-8">
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/gif" sizes="16x16">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="theme-color" content="#FCB040" />
		
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">
			
		<!-- jquery -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/3.2.0/jquery-3.2.0.slim.min.js"></script>
		
		<script>
			// init big slide
			$(document).ready(function() {
				$('.menu-link').bigSlide();
			});
		</script>	
	</head>
	<body>