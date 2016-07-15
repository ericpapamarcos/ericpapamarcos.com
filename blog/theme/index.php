<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div<?php if (($wp_query->current_post + 1) != $wp_query->post_count) { echo " class=\"story\""; } ?>>

                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <p class="caption"><?php echo get_the_date(); ?></p>

                <?php the_content(); ?>

            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>