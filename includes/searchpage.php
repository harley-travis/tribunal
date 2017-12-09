<?php 
/**
 *
 *Template Name: Seach Page
 *
 *
 */

get_header(); ?>


<div class="container-fluid green-blue small-header">
	<?php include  __DIR__ . "/includes/page-header.php"; ?>
</div>

<div class="wrap"><br>
	<div class="primary" class="content-area">
		<main class="main" class="site-main" role="main">
			
			<?php get_search_form(); ?>
			
		</main>
	</div>
</div>

<?php get_footer(); ?>