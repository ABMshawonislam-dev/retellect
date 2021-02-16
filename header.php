<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retellect</title>
    <?php wp_head(); ?>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
 		<?php 
 		 	if ( function_exists( 'the_custom_logo' ) ) {
			 the_custom_logo();
			}
  		?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    	<?php wp_nav_menu( array(
    		"theme_location"=>"primary",
    		"container"=> false,
    		"menu_class" => "navbar-nav ms-auto mb-2 mb-lg-0",
    		"walker" => new Walker_Nav_Primary(),
    	) ) ?>
    </div>
  </div>
</nav>

    