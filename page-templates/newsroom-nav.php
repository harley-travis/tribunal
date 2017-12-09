

<div class="container news-icon-wrapper lightGray-bg">
		<label for="show-menu" class="show-menu">Show Newsroom Options</label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="tab-menu" class="news-tab container-medium" data-tab>
		<div class="col-md-6 nav-parts">
			<li class="col-md-3 news-icon-title">
			  <a href="<?php echo ROOT_URL; ?><?php the_field('nav_1_link'); ?>">
				  <span class="ntext"><?php the_field('nav_1_title'); ?></span>
			  </a>
			</li>
			<li class="col-md-3 news-icon-title">
			  <a href="<?php echo ROOT_URL; ?><?php the_field('nav_2_link'); ?>">
				  <span class="ntext"><?php the_field('nav_2_title'); ?></span>
			  </a>
			</li>
			<li class="col-md-3 news-icon-title" onclick="location.href='http://rizepoint.com/blog/'">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_3_link'); ?>">
					<span class="ntext"><?php the_field('nav_3_title'); ?></span>
				</a>
			</li>
			<li class="col-md-3 news-icon-title" onclick="location.href='http://rizepoint.com/solutions/corporate-responsibility/'">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_4_link'); ?>">
					<span class="ntext"><?php the_field('nav_4_title'); ?></span>
				</a>
			</li>
</div>
<div class="col-md-6 nav-parts">
			<li class="col-md-4 news-icon-title">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_5_link'); ?>">
					<span class="ntext"><?php the_field('nav_5_title'); ?></span>
				</a>
			</li>
			<li class="col-md-4 news-icon-title">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_6_link'); ?>">
					<span class="ntext"><?php the_field('nav_6_title'); ?></span>
				</a>
			</li>
			<li class="col-md-4 news-icon-title">
				<a href="<?php echo ROOT_URL; ?><?php the_field('nav_7_link'); ?>">
					<span class="ntext"><?php the_field('nav_7_title'); ?></span>
				</a>
			</li>
		</ul>
</div><!-- news-icon-wrapper -->