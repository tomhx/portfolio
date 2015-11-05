<?php get_header(); ?>

<div class="main">
  <div class="wrapper">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          

          <!-- USING REPEATER FIELDS -->
          <div class="portfolioimages">
            <?php while(has_sub_field('images')): ?>
              <?php $image= get_sub_field('image'); ?>
              <img src=" <?php echo $image['sizes']['medium'] ?>" alt="">

              <p class="caption"><?php the_sub_field('caption'); ?></p>
            <?php endwhile; ?>
          </div>


          <div class="techused">
            <ul>
              <?php while(has_sub_field('technologies')): ?>
              <li> 
                <?php the_sub_field('technology'); ?>
                <i class="fa fa-<?php the_sub_field('icon_name') ?>"></i>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>