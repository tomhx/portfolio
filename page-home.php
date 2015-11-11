
<!-- 
Template Name: Home 
-->

<?php get_header(); ?>

<!-- Hi! Thanks for stopping by. If you like what you see please feel free to drop me a line. I'm always interested in talking about new projects. -->

<div class="main">

  <header>
    <div class="wrapper">
      <div class="fa fa-bars fa-2x"></div>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
  </header><!--/.header-->

  <!-- START OF THE WELCOME SECTION -->
	<div class="welcome">

    <div class="greeting">

		  <h1><?php the_field('the_hello'); ?></h1>
      <h2>I'm a web developer and I believe <a class="pulse infinite animated" href="#">change</a> is good.</h2>

    </div>

  </div> 
  <!-- END OF THE WELCOME SECTION -->
	
	<!-- START OF THE ABOUT SECTION -->
	<section class="about">
		<div class="wrapper">

		<h2><?php the_field('introduction_headline'); ?></h2>
    <div class="underline"></div>

		<p><?php the_field('introduction'); ?></p>
		
		</div> <!-- /.wrapper -->
	</section>	
  <!-- END OF THE ABOUT SECTION -->
  	
  <!-- START OF THE SIDE BY SIDE ME SECTION -->
  <section class="me">
		<div class="headshot"></div>
		<div class="specialties">
			<h2><?php the_field('the_work_headline'); ?></h2>
			<p><?php the_field('graphic_work_paragraph'); ?></p>
      <div class="mandd">
        <h4>Marketing Solutions</h4>
        <div class="power"></div>
        <h4>Development</h4>
        <div class="power"></div>
        <h4>Content Management</h4>
        <div class="power"></div>
     <!--  </div>
			<svg class="pie wow fadeInUp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M49.003,6.009c-7.712,0.144-14.227,1.977-20.997,5.886C7.287,23.857-0.025,50.245,11.412,71.122l22.374-12.917l15.217-8.786  V6.009z"/><path d="M33.322,60.782L12.409,72.856c3.98,6.605,8.825,11.333,15.596,15.242C34.692,91.959,42.284,94,49.96,94  c15.357,0,29.685-8.076,37.635-21.145L55.374,54.252l-5.371-3.101L33.322,60.782z"/><path d="M51.003,6.011v43.408v0l6.914,3.991l30.682,17.713C92.329,64.373,94,57.813,94,49.997C94,26.072,74.803,6.545,51.003,6.011z  "/></svg>
			<h4 class="wordcenter">Wordpress</h4>
		</div> -->
  </section>
  <!-- END OF THE SIDE BY SIDE ME SECTION -->

  <!-- START OF THE PORTFOLIO SECTION -->
  <section class="portfolio" id="featured">
  		<h2>Featured Work</h2>
      <div class="underline"></div>
  </section> 
      <div class="portexamples">
    		<?php $portfolioQuery = new WP_Query(
    		array(
        'posts_per_page' => 4,
    		'post_type' => 'websites'
    		)
    		); ?>

    		<?php if ($portfolioQuery->have_posts()): ?>
    			<?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>


    				<a href="<?php the_field('link');?>" class="featuredLink">
    				<div class="featured wow fadeIn">
              
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
  		</div>
    <!-- END OF THE PORTFOLIO SECTION -->

    <!-- START OF THE SERVICES SECTION -->
    <section class="services" id="services">
      <h2><?php the_field('services_headline'); ?></h2>
      <div class="underline"></div>
      <p><?php the_field('services_paragraph'); ?></p>
    </section>
    
    <section class="smain">
      <div class="wrapper">
        <div class="servicesmain">
          <?php while(has_sub_field('service_skill')): ?>
          <div class="serviceskill wow fadeInUp">
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
  	
    <div class="topprocess">
  		  <h2><?php the_field('process_headline'); ?></h2>
        <div class="underline"></div>
  		  <p class="processtag"><?php the_field('process_tagline'); ?></p>
      </div>
    <section class="process" id="process">
      <div class="wrapper">
  		  <div class="processgroup">
        

        <?php while(has_sub_field('process_plan')): ?>
            <div class="insidegroup wow fadeInLeft">
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

<!-- Pie Chart SVG by TukTuk Design from the Noun Project -->

<!-- Favicon by Freepik - www.falticon.com -->