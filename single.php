<?php get_header(); ?>

<main class="container">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()):the_post(); ?>
    <article class="post">
        <h3>
            <?php the_title();?>
        </h3>
        <p><?php the_content(); ?></p>
        <b>نویسنده : <?php the_author(); ?></b>
        <b>تاریخ : <?php the_time(); ?></b>
        <b>دسته بندی : <?php the_category(); ?></b>
    </article>
    <?php endwhile ?>
    <?php else : ?>
    <span>پستی وجود نداره</span>
    <?php endif; ?>
</main>

<?php get_footer(); ?>