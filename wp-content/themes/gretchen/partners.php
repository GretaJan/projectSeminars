<?php /*
Template Name: Partners
Description: A Page Template for custom page.
*/
get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); 
    $i = 0;
    $args = array( 'post_type' => 'partners', 'posts_per_page' => 9999 ); 
        $loop = new WP_Query( $args ); ?>
        <div class="owl-carousel">
     <?php       while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                    <div> <?php the_post_thumbnail('logo-list'); ?> </div>

					<?php $i++; endwhile; wp_reset_postdata(); ?>
        </div>
        
<?php endwhile; endif; ?>

<?php get_footer(); ?>