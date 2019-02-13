<?php get_header();?>

<div class="container pt-5 pb-5">
    
    <h1><?php 
    if ( has_post_thumbnail() ) {
the_post_thumbnail('thumbnail');
    }
    the_title();
?>
    </h1>
    <?php if ( !in_category( 'uslugi' ) ) : ?>
    <span class="bg-post-date"><?php echo "(Dodano: ".get_the_date( 'd.m.Y' ).")"; ?></span>
    <?php endif; ?>
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        
        <?php the_content();?>
    
    <?php endwhile; endif;?>
    
</div>

<?php get_footer();?>