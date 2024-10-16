<article <?php post_class('custom_car_class'); ?> id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
<?php 
if(has_post_thumbnail( get_the_ID() )){
  the_post_thumbnail( 'car-cover');
}

?>
<h1><?php the_title(); ?></h1>
  <div style="margin: 20px;"><?php the_content(); ?></div>
  <div><?php 
  echo get_post_meta(get_the_ID(), 'custom_price', true );
  ?></div>
  <a href="<?php the_permalink(); ?>">Read More</a>
</article>