<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
    <section class="contentItems">
      
      <?php $bgImage = get_field('bg_image') ?>
      
      <div class="heroSection" style="background:url('<?php echo $bgImage['url']?>'); background-size: cover; background-position: center center;" >
      
      <div class="heroText">
        
        <h1><?php the_field('hero_headline') ?></h1>
        <?php the_field('hero_text') ?>
       <h3><a href="<?php the_field('hero_button_link') ?> "><?php the_field('hero_button_text') ?></a></h3>

     
      </div> <!-- / .heroText -->
        
      </div> <!-- / .heroSection -->

      <div id="aboutInfo">
        <?php get_template_part('about'); ?>
      </div>
      </div>
      
      <div class="pageContent">
      <div id="portfolio">
        <?php get_template_part('portfolio'); ?>
      </div>
      </div>
      
      <div class="pageContent">
      <div id="contact">
        <?php get_template_part('contact'); ?>
      </div>
      </div>
     
    </section>
    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>