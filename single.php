<?php
  /**
   * Template Name:Single
   */
  
get_header(); 
while(have_posts()){
	the_post();
}
?>       

    <!-- -------------------------------body----------------------------- -->
    <div class="single">
      <div class="single-bg"></div>
      <div class="single-one"><?php the_title(); ?></div>
      <div class="single-two">
        <div>
         <?php the_content(); ?>
        </div>
        <div>
			<?php the_post_thumbnail(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>