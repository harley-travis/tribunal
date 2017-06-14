<?php 
/**
 * Template Name: Newsroom
*/
get_header(); ?>

<style>
/*
	.news-icon-wrapper {
    text-align: center;
}
*/
</style>


<div class="container-fluid purple-blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1>Newsroom</h1>
			<div class="banner-btns">
				<a href="<?php echo ROOT_URL; ?>/blog" class="btn btn-lg btn-width-lg btn-inverse-white orange-text">RizePoint Blog</a> <a href="<?php echo ROOT_URL; ?>/resources" class="btn btn-lg btn-width-lg btn-inverse-white">Resources</a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<div class="icon-news-columns">
   <div class="container news-icon-wrapper">
		<label for="show-menu" class="show-menu">Show Newsroom Options</label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="tab-menu" class="news-tab container-medium" data-tab>
			<li class="col-lg-2 col-md-4 col-sm-12 news-icon-title active">
			  <a href="#panel1">
				  <img src="http://rizepoint.com/wp-content/uploads/2016/10/press-01.png" alt="" class="newsroom-icon-png-img"><br>
				  <span class="ntext">Press</span>
			  </a>
			</li>
			<li class="col-lg-2 col-md-4 col-sm-12 news-icon-title">
			  <a href="#panel2">
				  <img src="http://rizepoint.com/wp-content/uploads/2016/10/news-01.png" alt="" class="newsroom-icon-png-img"><br>
				  <span class="ntext">News</span>
			  </a>
			</li>
			<li class="col-lg-2 col-md-4 col-sm-12 news-icon-title" onclick="location.href='http://rizepoint.com/blog/'">
				<a href="<?php echo ROOT_URL; ?>/blog">
					<img src="http://rizepoint.com/wp-content/uploads/2016/10/blog-01.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">Blog</span>
				</a>
			</li>
			<li class="col-lg-2 col-md-4 col-sm-12 news-icon-title" onclick="location.href='http://rizepoint.com/solutions/corporate-responsibility/'">
				<a href="">
					<img src="http://rizepoint.com/wp-content/uploads/2016/10/csr-01-new.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">CSR</span>
				</a>
			</li>
			<li class="col-lg-2 col-md-4 col-sm-12 news-icon-title">
				<a href="/awards">
					<img src="http://rizepoint.com/wp-content/uploads/2016/10/awards.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">Awards</span>
				</a>
			</li>
			<li class="col-lg-2 col-md-4 col-sm-12 news-icon-title">
				<a href="#panel6">
					<img src="http://rizepoint.com/wp-content/uploads/2016/10/multimedia-01.png" alt="" class="newsroom-icon-png-img"><br>
					<span class="ntext">Media</span>
				</a>
			</li>
		</ul>
	</div><!-- news-icon-wrapper -->
    <div class="tabs-content container">
        <div class="content active" id="panel1">
            <!-- PRESS RELEASE -->
            <section class="press-releases-archive">
                <div class="">
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
                       <?php include  __DIR__ . "/../includes/press.php"; ?>
                    </article>
                </div>
            </section>
        </div><!-- panel1 -->
        <div class="content" id="panel2">
            <!-- NEWS -->
            <section class="news-archive">
                <div class="">
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
                       <?php include  __DIR__ . "/../includes/news.php"; ?>
                    </article>
                </div><!-- row -->
            </section>
        </div><!-- panel 2 -->
        <div class="content" id="panel3">
            <!-- BLOG -->
        </div>
        <div class="content" id="panel4">
            <!-- CSR -->
        </div>
        <div class="content container-medium" id="panel5">
            <!-- AWARDS -->
        </div>
        <div class="content container-medium" id="panel6">
            <!-- MEDIA -->
            <article class="article-newsroom-wrapper">
                <h3 class="newsroom-title-thing">Media Contact</h3>
                <hr class="newsroom-title-heading">
                <p>If you are interested in contacting us, you can reach us by email or phone. We will respond within 24 hours. </p>
                <p>Email us at <a href="mailto:pr@rizepoint.com">pr@rizepoint.com</a> or call us at <a href="tel:801-285-9827">801-285-9827</a></p>
            </article>
        </div>
    </div><!-- tabs-content -->    
</div><!-- icon-news-columns -->


<?php get_footer(); ?>
