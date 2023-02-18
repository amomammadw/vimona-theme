<?php get_header(); ?>

<main class="container">
    <div class="flex-container">
        <div>
            <?php if(have_posts()) : ?>
            <?php while(have_posts()):the_post(); ?>
            <article class="post">
                <h3>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title();?>
                    </a>
                </h3>
                <?php the_post_thumbnail( 'large' ); ?>
                <p><?php the_excerpt(); ?></p>
                <b>نویسنده : <?php the_author(); ?></b>
                <b>تاریخ : <?php the_time(); ?></b>
                <b>دسته بندی : <?php the_category(); ?></b>
            </article>
            <?php endwhile ?>
            <?php else : ?>
            <span>پستی وجود نداره</span>
            <?php endif; ?>
        </div>
        <div class="sidebar">
            <div>
                <?php if(is_active_sidebar( 'sidebar' )): ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>