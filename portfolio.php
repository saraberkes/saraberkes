<?php get_header();  ?>

<div class="main">

		<div class="content portfolioContent">
		 <h2><?php the_field('portfolio_headline', 63) ?></h2>
		<?php
			$portfolioHome = new WP_Query(
		array(
			'posts_per_page' => -1,
			'post_type' => 'portfolio',
			'order' => 'ASC'
			)
		); ?>


		<?php while ($portfolioHome->have_posts()) : $portfolioHome->the_post(); ?> 
			<section id="<?php echo $post->post_name; ?>">

			<div class="portfolioPiece">

				<?php $featuredImage = get_field('project_featured_image'); ?>

			<div class="portfolioImage">
				<img src="<?php echo $featuredImage['url']?>" alt="<?php echo $featuredImage['alt'] ?> ">
			</div>
			
			<div class="portfolioText">
				<h4><?php the_field('project_name') ?></h4>
				<h3><?php the_field('project_type') ?> </h3>
				<p><?php the_field('project_short_description') ?></p>
				<div class="links">
					<h3> <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					         View Details </a></h3>

					 <?php if( get_field('has_live_site') )
					  { ?>
					 <?php $link = get_field('live_site_link') ?>
					 <h3><a href="<?php echo $link?>" target="_blank">View Live</a> <h3>
					 <?php }  ?>
				</div>
			</div>
			</section>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</div>


		</div> <!-- /,content -->
</div> <!-- /.main -->