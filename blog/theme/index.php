<?php get_header(); ?>

<h1><?php echo get_bloginfo('name'); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div<?php if (($wp_query->current_post + 1) != $wp_query->post_count) { echo " class=\"story\""; } ?>>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php the_excerpt(); ?>

            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>