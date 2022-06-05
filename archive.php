<?php
  /**
   * Template Name:Archive
   */
  
get_header(); ?>

<!-- -------------------------------products----------------------------- -->
<div class="products">
      <div class="products-title">محصولات رایان پردازش کاوش</div>
      <div class="products-products">
		  
        <?php
			while ( have_posts() ) {
			the_post();
			$post_link = get_permalink();
		?>
        <div class="wow animate__animated animate__fadeIn">
          <div>
			<?php
				the_post_thumbnail();
			?>
		  </div>
          <div><?php the_title(); ?></div>
          <div>
			<?php the_excerpt(); ?>
		  </div>
          <div class="products-hover-cover">
            <a href="<?php the_permalink(); ?>">مشاهده جزییات محصول</a>
          </div>
        </div>
		<?php } ?>
		  
      </div>
    </div>

<?php get_footer(); ?>