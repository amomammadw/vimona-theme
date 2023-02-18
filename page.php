<?php get_header(); ?>

<main class="container">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()):the_post(); ?>
    <article class="post">
        <h3>
            <a href="<?php the_permalink() ?>">
                <?php the_title();?>
            </a>
        </h3>
        <?php the_post_thumbnail( 'large' ); ?>
        <p><?php the_content(); ?></p>
    </article>
    <?php endwhile ?>
    <?php else : ?>
    <span>پستی وجود نداره</span>
    <?php endif; ?>
</main>

<?php get_footer(); ?>