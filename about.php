<?php get_header();  ?>

		<div class="aboutMobile">
		<h2><?php the_field('hero_headline') ?></h2>
		<?php the_field('hero_text') ?>
			<div class="aboutMore">
				<?php the_field('about_me_text', 39) ?>
			</div>
		</div>
		
		<section class="about">
			<p><?php the_field('about_me_text', 39) ?></p>
		</section>
		
		<section class="skills">
			<h2><?php the_field('skills_headline', 39) ?></h2>
		
		<div class="skillsItems">
			<?php while(have_rows('skills', 39)) : the_row(); ?>
				<div class="skill">
					<div class="skillIcon">
						<?php the_sub_field('skill_icon') ?>
					</div>
					<h3><?php the_sub_field('skill_name') ?></h3>
				</div>

		<?php endwhile; ?>
	</div>
		<?php wp_reset_postdata(); ?>
		</section>
