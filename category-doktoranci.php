<?php get_header(); ?>

<div class="container pt-5">
    <div class="row">
    <div class="col-md-9 p-0 m-0 pr-2">
        
        <h1><?php single_cat_title(); ?></h1>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="card p-2 mb-2">
                    <h3>
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        }
                        the_title();
                        ?>
                    </h3>
                    <span class="bg-post-date"><?php echo "(Dodano: " . get_the_date('d.m.Y') . ")"; ?></span>
                    <?php the_excerpt(); ?>

                    <a href="<?php the_permalink(); ?>" class="btn btn-info">Czytaj więcej</a>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
    <div class="col-md-3 p-0 m-0">
        <div id="bg-sidebar-group" class="bg-sidebar-category">



            <?php dynamic_sidebar('sidebar-doktoranci'); ?>



    </div>
    </div>

    </div>
</div>

<?php get_footer(); ?>