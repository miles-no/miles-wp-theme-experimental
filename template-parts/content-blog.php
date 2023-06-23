<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miles_2023
 */

?>

<miles-blog-card
        id="post-<?php echo the_ID(); ?>"
        title="<?php the_title(); ?>"
        url="<?php echo get_permalink(); ?>"
        author="<?php echo the_author(); ?>"
        posted="<?php echo get_the_date(); ?>"
        <?php if ( has_post_thumbnail() ) : ?>
            image="<?php the_post_thumbnail('feature-image'); ?>"
        <?php endif; ?>
>
</miles-blog-card><!-- #post-<?php the_ID(); ?> -->
<!-- <?php post_class(); ?>  -->
