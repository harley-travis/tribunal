<?php get_template_part('templates/page', 'header'); ?>

<?php if ( isset($_GET['post_type']) ) : ?>

<?php include('date-custom-post-type.php') ?>

<?php else : ?>

<div class="news-banner">
    <div class="news-banner-wrapper container">
        <h2>Newsroom</h2>
        <h3>Check out our recent news and media</h3>
    </div><!-- news-banner-wrapper -->
</div><!-- news-banner -->

<div class="icon-news-columns">
    <label for="show-menu" class="show-menu">Show Newsroom Options</label>
    <input type="checkbox" id="show-menu" role="button">
    <ul id="tab-menu" class="news-tab container-medium" data-tab>
        <li class="large-2 medium-4 small-12 columns news-icon-title active">
          <a href="#panel1">
              <img src="http://rizepoint.com/wp-content/uploads/2016/10/press-01.png" alt="" class="newsroom-icon-png-img">
              <span class="ntext">Press</span>
          </a>
        </li>
        <li class="large-2 medium-4 small-12 columns news-icon-title">
          <a href="#panel2">
              <img src="http://rizepoint.com/wp-content/uploads/2016/10/news-01.png" alt="" class="newsroom-icon-png-img">
              <span class="ntext">News</span>
          </a>
        </li>
        <li class="large-2 medium-4 small-12 columns news-icon-title" onclick="location.href='http://rizepoint.com/blog/'">
            <a href="">
                <img src="http://rizepoint.com/wp-content/uploads/2016/10/blog-01.png" alt="" class="newsroom-icon-png-img">
                <span class="ntext">Blog</span>
            </a>
        </li>
        <li class="large-2 medium-4 small-12 columns news-icon-title" onclick="location.href='http://rizepoint.com/solutions/corporate-responsibility/'">
            <a href="">
                <img src="http://rizepoint.com/wp-content/uploads/2016/10/csr-01-new.png" alt="" class="newsroom-icon-png-img">
                <span class="ntext">CSR</span>
            </a>
        </li>
        <li class="large-2 medium-4 small-12 columns news-icon-title">
            <a href="#panel5">
                <img src="http://rizepoint.com/wp-content/uploads/2016/10/awards.png" alt="" class="newsroom-icon-png-img">
                <span class="ntext">Awards</span>
            </a>
        </li>
        <li class="large-2 medium-4 small-12 columns news-icon-title">
            <a href="#panel6">
                <img src="http://rizepoint.com/wp-content/uploads/2016/10/multimedia-01.png" alt="" class="newsroom-icon-png-img">
                <span class="ntext">Media</span>
            </a>
        </li>
    </ul>
    
    <div class="tabs-content container">
        <div class="content active" id="panel1">
            <!-- PRESS RELEASE -->
            <section class="press-releases-archive">
                <div class="row">
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
                       <?php get_template_part('press'); ?>
                    </article>
                </div>
            </section>
        </div><!-- panel1 -->
        <div class="content" id="panel2">
            <!-- NEWS -->
            <section class="news-archive">
                <div class="row">
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
                       <?php get_template_part('news'); ?>
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
            <section class="news-archive-awards container">
                <article class="article-newsroom-wrapper">
                    <h3 class="newsroom-title-thing">Awards</h3>
                    <hr class="newsroom-title-heading">
                    <div class="small-12 columns">
                    
  
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/frank-maylett-ceo-of-the-year/"><img class="" src="/wp-content/uploads/2016/06/CEO-of-the-Year.jpg" width="247" height="282" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/frank-maylett-ceo-of-the-year/">Frank Maylett named CEO of the year</a><br>

Date: March 16, 2017

</div>
</div>
</div>
&nbsp;

<hr />
                    
                    
                    
                    

<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/rizepoint-wins-silver-2017-stevie-awards-sales-customer-service/"><img class="" src="/wp-content/uploads/2017/02/2017-stevie-sales-customer-service.jpg" width="247" height="282" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/rizepoint-wins-silver-2017-stevie-awards-sales-customer-service/">RizePoint Wins Silver In 2017 Stevie Award </a><br>

Date: February 28, 2017

</div>
</div>
</div>
&nbsp;

<hr />                   


<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/jesse-dowdle-forty-under-40/"><img class="" src="/wp-content/uploads/2016/06/forty-forty-logo.jpg" width="247" height="282" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/jesse-dowdle-forty-under-40/">Jesse Dowdle Named To Utah Business' Forty Under 40</a><br>

Date: February 8, 2017

</div>
</div>
</div>
&nbsp;

<hr />
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/michelle-suzuki-marketer-year/"><img class="" src="/wp-content/uploads/2016/06/lil-samy.jpg" width="247" height="282" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/michelle-suzuki-marketer-year/">Michelle Suzuki named Marketer of the year</a><br>

Date: January 19, 2017

</div>
</div>
</div>
&nbsp;

<hr />
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/50-fastest-growing-tech-companies/"><img class="" src="/wp-content/uploads/2017/01/silicon_review_fast_50.jpg" width="247" height="282" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/50-fastest-growing-tech-companies/">50 Fastest Growing Tech Companies</a><br>

Date: January 11, 2017

</div>
</div>
</div>
&nbsp;

<hr />
                    
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/rizepoint-named-food-logistics-2016/"><img class="" src="/wp-content/uploads/2016/12/food-logistics-min.jpg" width="247" height="282" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/rizepoint-named-food-logistics-2016/">Food Logistics' 2016 FL100+ Top Software and Technology Providers</a><br>

Date: December 16, 2016

</div>
</div>
</div>
&nbsp;

<hr />
                    
                    
                    
  
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/rizepoint-2016-top-workplace/"><img class="" src="/wp-content/uploads/2016/11/top-places-to-work.png" width="334" height="128" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/rizepoint-2016-top-workplace/">Salt Lake Tribune Names RizePoint As A 2016 Top Workplace</a><br>

Date: November 22, 2016

</div>
</div>
</div>
&nbsp;

<hr />
				&nbsp;
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/marketer-of-the-year/"><img class="" src="/wp-content/uploads/2016/06/uma.jpg" width="334" height="128" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/marketer-of-the-year/">Michelle Suzuki Named Marketer of the Year by Utah Marketing Association</a><br>

Date: November 21, 2016

</div>
</div>
</div>
&nbsp;

<hr />
					
						<div class="row">
							<div class="banner-section">
								<div class="medium-12 large-3 columns">
									<a href="/press-releases/john-knotwell-wins-revgen-2016-award/">
										<img src="/wp-content/uploads/2016/06/rev-gen.png" />
									</a>
								</div>
								<div class="medium-12 large-9 columns">
									<a href="/press-releases/john-knotwell-wins-revgen-2016-award/">John Knotwell Wins RevGen 2016 Award</a><br />
									Date: November 3, 2016
								</div>
							</div>
						</div>

						&nbsp;
						<hr />
                      
                       <div class="row">
<div class="small-12 columns">
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/brenna-hill-one-of-utah-business-magazine/"><img src="/wp-content/uploads/2016/06/20-in-their-20s.jpg" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/brenna-hill-one-of-utah-business-magazine/">Brenna Hill Named One of Utah Business Magazine 20 in Their 20's</a><br />

Date: October 18, 2016

</div>
</div>
</div>

&nbsp;
<hr />

&nbsp;
<div class="row">
<div class="small-12 columns">
<div class="row">
<div class="banner-section">
<div class="medium-12 large-3 columns"><a href="/press-releases/2016-stevie-awards-for-great-employers/"><img class="" src="/wp-content/uploads/2016/10/2016-stevies.jpg" alt="Stevies" width="362" height="204" /></a></div>
<div class="medium-12 large-9 columns">

<a href="/press-releases/2016-stevie-awards-for-great-employers/">RizePoint Wins Silver in 2016 Stevie® Award for Great Employers</a><br />

Date: October 3, 2016

</div>
</div>
</div>
                       &nbsp;
                        <hr />
                        <div class="row">
                            <div class="banner-section">
                                <div class="medium-12 large-3 columns">
                                    <a href="/press-releases/michelle-suzuki-named-finalist-women-tech-awards/">
                                        <img src="/wp-content/uploads/2016/06/women_tech_council_logo-300x127.jpg" alt="Women Tech Council" />
                                    </a>
                                </div>
                                <div class="medium-12 large-9 columns">
                                    <a href="/press-releases/michelle-suzuki-named-finalist-women-tech-awards/">Michelle Suzuki Named Finalist for Women Tech Award</a><br />
                                    <span>Date: August 4, 2016</span>
                                </div>
                            </div><!-- banner-section -->
                        </div><!-- row -->
                        &nbsp;
                        <hr />
                        <div class="row">
                            <div class="banner-section">
                                <div class="medium-12 large-3 columns">
                                    <a href="/press-releases/frank-maylett-named-2016-ceo-year-utah-technology-council-2/">
                                        <img src="/wp-content/uploads/2016/06/original-image_from_clipboard.png20160615-9314-1as37nv-300x180.png" />
                                    </a>
                                </div>
                                <div class="medium-12 large-9 columns">
                                    <a href="/press-releases/frank-maylett-named-2016-ceo-year-utah-technology-council-2/">Frank Maylett Named 2016 CEO of the Year by Utah Technology Council</a><br />
                                    <span>Date: April 14, 2016</span>
                                </div>
                            </div><!-- banner-section -->
                        </div><!-- row -->
                        &nbsp;
                        <hr />
                        <div class="row">
                            <div class="banner-section">
                                <div class="medium-12 large-3 columns">
                                    <a href="/press-releases/frank-maylett-named-2016-ceo-year-utah-technology-council/"><img src="/wp-content/uploads/2016/06/original-image_from_clipboard.png20160615-9314-1as37nv-300x180.png" />
                                    </a>
                                </div>
                                <div class="medium-12 large-9 columns">
                                    <a href="/press-releases/frank-maylett-named-2016-ceo-year-utah-technology-council/">John Knotwell Awarded Legislator of the Year by Utah Technology Council</a><br />
                                    <span>Date: April 14, 2016</span>
                                </div>
                            </div><!-- banner-section -->
                        </div><!-- row -->
                        &nbsp;
                        <hr />
                        <div class="row">
                            <div class="banner-section">
                                <div class="medium-12 large-3 columns">
                                    <a href="/press-releases/steton-mobile-auditor-wins-gold-stevie-award/">
                                        <img src="/wp-content/uploads/2016/06/original-image_from_clipboard.png20160615-9314-3yt417-300x300.png" />
                                    </a>
                                </div>
                                <div class="medium-12 large-9 columns">
                                    <a href="/press-releases/steton-mobile-auditor-wins-gold-stevie-award/">RizePoint Mobile Auditor Wins Gold Stevie Award</a><br />
                                    <span>Date: March 8, 2016</span>
                                </div>
                            </div><!-- banner-section -->
                        </div><!-- row -->
                        &nbsp;
                        <hr />
                        <div class="row">
                            <div class="banner-section">
                                <div class="medium-12 large-3 columns">
                                    <a href="/press-releases/steton-named-as-finalist-in-2016-stevie-awards-for-sales-customer-service/">
                                        <img src="/wp-content/uploads/2016/06/original-image_from_clipboard.png20160615-9314-153x9ee-300x300.png" />
                                    </a>
                                </div>
                                <div class="medium-12 large-9 columns">
                                    <a href="/press-releases/steton-named-as-finalist-in-2016-stevie-awards-for-sales-customer-service/">RizePoint Named as Finalist in 2016 Stevie Awards</a><br />
                                    <span>Date: February 8, 2016</span>
                                </div>
                            </div><!-- banner-section -->
                        </div><!-- row -->
                        &nbsp;
                        <hr />
                        <div class="row">
                            <div class="banner-section">
                                <div class="medium-12 large-3 columns">
                                    <a href="http://compliance.cioreview.com/vendors/most-promising-compliance-technology-solution-providers-2015.html" target="_blank">
                                        <img src="http://rizepoint.com/wp-content/uploads/2016/06/CIO-20-most-promising-300x150.jpg" alt="CIO 20 most promising compliance software providers" width="300" height="150" />
                                    </a>
                                </div>
                                <div class="medium-12 large-9 columns">
                                    <a href="http://compliance.cioreview.com/vendors/most-promising-compliance-technology-solution-providers-2015.html" target="_blank">RizePoint Makes CIO 20 Most Promising Compliance Solution Providers 2015</a><br />
                                    <span>Date: October 23, 2015</span>
                                </div>
                            </div><!-- banner-section -->
                        </div><!-- row -->
                    </div>
                </article>
            </section>
            
            
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


<?php endif ; ?>
