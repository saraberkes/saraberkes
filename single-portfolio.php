<?php get_header(); ?>
<div class="content">
<div class="menuWrapper">
  <div class="primaryMenu">
  <div id="menuIcon" class="fa fa-bars">
    <a href="#" id="menu-item">
    </a>
  </div>
    <div class="menufixed" id="menufixed">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'singlepage'
        )); ?>
      </div>
    </div>
  </div>
</div>

<div class="main">
	<div class="container">
		<div class="content portfolioProject">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="featuredImage"><?php $featuredImage = get_field('project_featured_image') ?></div>
				<img src="<?php echo $featuredImage['url'] ?> " alt="<?php echo $featuredImage['alt'] ?> ">
				<h2><?php the_field('project_name') ?></h2>
				<?php  ?>
				
				<div class="description">
					<?php the_field('project_long_description') ?>
				</div>

				<?php if( get_field('has_live_site') )
				{ ?>
					<?php $link = get_field('live_site_link') ?>
				<?php } ?>

				<?php if(get_field('on_github'))
				{ ?>
				<?php $github = get_field('github_link') ?>
				<?php } ?>

				<div class="links">
					<h3><a href="<?php echo $link?>" target="_blank">View Live</a><h3>
					<h3><a href="<?php echo $github ?>" target="_blank">View on Github</a></h3>
				</div>
				
				<div class="projectImageGrid">
					<?php while ( have_rows('project_images')) : the_row(); ?>
						<?php $image = get_sub_field('image') ?>
						
						<div class="projectImages">
							<img src="<?php echo $image['url'] ?> " alt="<?php echo $image['alt'] ?> ">
						</div>
					
					<?php endwhile; //end of the loop to get the images from the repeater field ?>
					<?php wp_reset_postdata(); ?>
				</div>

		<?php endwhile; // end of the if / while posts at the top ?>

		</div> <!-- /.content -->

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>