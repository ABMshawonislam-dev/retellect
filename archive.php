<?php if ( is_active_sidebar( "blog-sidebar" ) ) { 
  $blog_col = "col-lg-8";
  $blog_item_col = "45%";
  $blog_bottom_pagi_col = "col-lg-8";
}else{
  $blog_col = "col-lg-12"; 
  $blog_item_col = "30%";
  $blog_bottom_pagi_col = "col-lg-12";
}
  ?>

<?php get_header(); ?>
<?php include get_template_directory() . "/template-parts/breadcrumb.php"; ?>
    <section id="blog-part">
    	   <div class="container">
       	<div class="row">
       	<div class="<?php echo $blog_col ?>">
       		<div class="row">
       			<div class="grid">
       			<?php if (have_posts() ) : ?>
                    <?php while (have_posts() ) : the_post(); ?>
                  
				        <div class="grid-item" style="width: <?php echo $blog_item_col ?>;">
				            <div class="card" style="width: 100%;">
				                <div class="blog-img">
                          <?php
                            if(has_post_thumbnail()){
                              the_post_thumbnail('medium');
                            }
                          ?>
                        </div>
				               
				                   <div class="blog-details">
                        	<?php 
							global $post;
							$author_id = $post->post_author;
							$author_id = get_the_author_meta( 'ID' );?>
                        	<img src="<?php echo esc_url( get_avatar_url( $author_id ) ); ?>">
                        	<span>Posted By:<?php echo get_the_author_meta( 'nicename', $author_id );?></span>
							
							 
                          <p class="date"><?php echo get_the_date();?></p>
                          <p class="tips"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
                          <a href="<?php the_permalink(); ?>">read more<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
				               
				              </div>
				        </div>
				     
                 

                    <?php endwhile; ?>

                  <?php wp_reset_postdata(); ?>
		  			</div>
		              <?php else : ?>
		                  <p><?php esc_html_e( "Sorry, no posts matched your criteria.","eventoo" ); ?></p>
		              <?php endif; ?>

		              <div class="pagination">
		              	<?php echo paginate_links(array(
		              			'prev_text'          => __('<i class="fas fa-angle-left"></i>'),
								'next_text'          => __('<i class="fas fa-angle-right"></i>'),
		              	));?>
		              </div>
		       		</div>
		       	</div>

              	<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
              		 <div class="col-lg-4">
    					<?php dynamic_sidebar( 'blog-sidebar' ); ?>
      				</div>
				<?php endif; ?>
            </div>

       </div>
       </div>
    </section>
<?php get_footer(); ?>