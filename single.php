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
		<div class="blog-img mt-5 mb-5">
	          <?php
	            if(has_post_thumbnail()){
	              the_post_thumbnail('large');
	            }
	          ?>
	     </div>
	     <div class="row">
	     	<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
              		 <div class="col-lg-4">
    					<?php dynamic_sidebar( 'blog-sidebar' ); ?>
      				</div>
				<?php endif; ?>
	     	<div class="<?php echo $blog_col ?>">
	     		<div class="blog-details blog-details-detials">
	     			<p class="tips"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>

	     			<?php echo the_content(); ?>
	     		</div>
	     	</div>
	     	
	     </div>
	</div>
</section>

<?php get_footer(); ?>