<?php get_header(); ?>
<?php include get_template_directory() . "/template-parts/breadcrumb.php"; ?>
    <section id="blog-part">
    	   <div class="container">
       	<div class="row">
       	<?php if (have_posts() ) : ?>
                    <?php while (have_posts() ) : the_post(); ?>
                
                  <div class="col-lg-4 col-sm-6 mb-4" <?php post_class();?>>
                      <div class="blog-item blog-gride-item">
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

              <?php else : ?>
                  <p><?php esc_html_e( "Sorry, no posts matched your criteria.","eventoo" ); ?></p>
              <?php endif; ?>
       </div>
       </div>
    </section>
<?php get_footer(); ?>