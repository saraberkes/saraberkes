<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

    <h2><?php the_field('contact_headline', 41) ?></h2>
	
    <div class="contactInfo">
    	
        <div class="contactForm">
        	<?php the_field('contact_form', 41) ?>
        </div>
        
        <div class="contactText">
        	<?php the_field('contact_text', 41)?>
        </div>
    
    </div>
    
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->