<article <?php post_class('custom_car_class'); ?> id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
My custom Template  
<h1><?php the_title(); ?></h1>
  <div style="margin: 20px;"><?php the_content(); ?></div>
  <a href="<?php the_permalink(); ?>">Read More</a>
</article>