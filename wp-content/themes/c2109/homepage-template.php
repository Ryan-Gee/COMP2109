<?php
/*
* Template Name: Homepage
* The front page template file
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
            // if(have_posts()) {
            //     while (have_posts()) {
            //         the_post();
            //         get_template_part('template-parts/content/content');
            //     }
            //     twentynineteen_the_posts_navigation();
            // }
            // else {
            //     get_template_part('template-parts/content/content', 'none');
            // }
        ?>
        <section class="masthead" style="background-image: url(<?php the_field('masthead_image'); ?>); height: 200px; background-size: cover;">
                <article>
                    <h1 style="color: white;"><?php the_field('page_title'); ?></h1>
                </article>
        </section>
    </main>
</div>