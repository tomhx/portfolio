
<!-- 
Template Name: Home 
-->



<div class="main">

  <!-- START OF THE WELCOME SECTION -->
	<div class="welcome">

  <?php get_header(); ?>

    <div class="greeting">

		  <h1><?php the_field('the_hello'); ?></h1>
      <h4 class="wow fadeIn" data-wow-delay="3s">Looking for something new?</h4>

    </div>

  </div> 
  <!-- END OF THE WELCOME SECTION -->
	
	<!-- START OF THE ABOUT SECTION -->
	<section class="about">
		<div class="wrapper">

		<h2><?php the_field('introduction_headline'); ?></h2>

		<p><?php the_field('introduction'); ?></p>
		
		</div> <!-- /.wrapper -->
	</section>	
  <!-- END OF THE ABOUT SECTION -->
  	
  <!-- START OF THE SIDE BY SIDE ME SECTION -->
  <section class="me">
		<div class="headshot">
		</div>
		<div class="specialties">
			<h2><?php the_field('the_work_headline'); ?></h2>
			<p><?php the_field('graphic_work_paragraph'); ?></p>
			<h4>Marketing Solutions</h4>
			<div class="powerone power wow slideInLeft"></div>
			<h4>Development</h4>
			<div class="powertwo power wow slideInLeft"></div>
			<h4>Wordpress</h4>
			<div class="powerthree power wow slideInLeft"></div>
		</div>
  </section>
  <!-- END OF THE SIDE BY SIDE ME SECTION -->

  <!-- START OF THE PORTFOLIO SECTION -->
  <section class="portfolio" id="featured">
  		<h2>Featured Work</h2>
  		<?php $portfolioQuery = new WP_Query(
  		array(
      'posts_per_page' => 4,
  		'post_type' => 'websites'
  		)
  		); ?>

  		<?php if ($portfolioQuery->have_posts()): ?>
  			<?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>


  				<a href="<?php the_field('link');?>" class="featuredLink">
  				<div class="featured wow fadeInUp">
            
            <div class="leftp">
  					 <?php the_post_thumbnail('portsize'); ?>
            </div>

            <div class="rightp">

              <h2><?php the_field('short_description'); ?></h2>
              <h4>Built Using<h4>
  					  <div class="sublang">
               <?php while(has_sub_field('technology')): ?>
  						 <p class="hvr-shutter-out-horizontal'"><?php the_sub_field('language'); ?></p>
               <?php endwhile; ?>
              </div>

            </div>
              
  				</div>
          </a>

  			<?php endwhile; ?>
  			<?php wp_reset_postdata(); ?>
  			<?php endif; ?>
  		
  	</section> 
    <!-- END OF THE PORTFOLIO SECTION -->

    <!-- START OF THE SERVICES SECTION -->
    <section class="services" id="services">
      <h2><?php the_field('services_headline'); ?></h2>
      <p><?php the_field('services_paragraph'); ?></p>
    </section>
    
    <section class="smain">
      <div class="wrapper">
        <div class="servicesmain">
          <?php while(has_sub_field('service_skill')): ?>
          <div class="serviceskill">
            <i class="fa fa-<?php the_sub_field('service_icon');?>"></i>
            <h4 class="servicetitle"><?php the_sub_field('service_title'); ?></h4>
            <p><?php the_sub_field('service_detail'); ?></p>
           </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <!-- END OF THE SERVICES SECTION -->

    <!-- START OF THE PROCESS SECTION -->
  	<section class="process" id="process">
      <div class="topprocess">
  		  <h2><?php the_field('process_headline'); ?></h2>
  		  <p class="processtag"><?php the_field('process_tagline'); ?></p>
      </div>
      <div class="wrapper">
  		  <div class="processgroup">
        

        <?php while(has_sub_field('process_plan')): ?>
            <div class="insidegroup">
              <div class="proleft">
                <i class="fa fa-<?php the_sub_field('process_image');?>"></i>
              </div>

              <div class="proright">
        			 <h3><?php the_sub_field('process_title'); ?></h3>
        			 <p><?php the_sub_field('process_description'); ?></p>
              </div>
            </div>
  		  <?php endwhile; ?>

        </div>
      </div>
  	</section>
    <!-- END OF THE PROCESS SECTION -->

    <!-- START OF TESTIMONIAL SECTION -->
    <section class="testimonial">
      <div class="statement">
        <h3><?php the_field('testimonial'); ?></h3>
        <p>- <?php the_field('testimonial_attribution'); ?></p>
      </div>
    </section>
	
</div> <!-- /.main -->

<?php get_footer(); ?>


<!-- CREDITS -->

<!-- Hero image by Negative Space at Unsplash.com 

Testimonial photo by Thomas Lefebvre at Unsplash.com

VIDEO BY CHRISTOPH PANTEL. 
CONTACT@MAZWAI.COM  -->

<!-- Favicon by Freepik - www.falticon.com -->