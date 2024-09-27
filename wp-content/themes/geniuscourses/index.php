<?php get_header(); ?>

<div>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php  get_template_part('partials/content'); ?>

	<?php endwhile; ?>
	<div class="pagination">
		
		<!-- <div class="prev">
			//variant2
			<?php get_previous_posts_link( 'Prev' ); ?>
		</div>
		<div class="next">
		<?php get_previous_posts_link( 'Next' ); ?>
		</div> -->

		<!-- <?php  the_posts_pagination([
			//variant3
			'prev_text' => esc_html__('Back', 'geniuscourses'),
			'next_text' => esc_html__('Onward', 'geniuscourses'),
		]); ?> -->
	<!-- variant 4 -->
    <?php echo paginate_links(); ?>

	</div>
	<?php
	else : ?>
		<?php  get_template_part('partials/content', 'none'); ?>
		<?php endif; ?>
</div>

 <?php
// get_sidebar(); -->  
get_footer();
