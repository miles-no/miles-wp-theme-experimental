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
        author="<?php the_author(); ?>"
        posted="<?php echo get_the_date(); ?>"
        <?php if ( $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'feature-image' ) ) : ?>
            image="<?php echo $image[0]; ?>"
        <?php endif; ?>
>
</miles-blog-card><!-- #post-<?php the_ID(); ?> -->
<!-- <?php post_class(); ?>  -->
