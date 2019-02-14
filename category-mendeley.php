<?php get_header();?>

<div class="container pt-5">
    
    <h1><?php single_cat_title();?></h1>
    
    
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        
    <div class="card p-2 mb-2">
 
            <a href="<?php the_permalink();?>" ><?php the_title(); ?></a>

        
        
    </div>
    <?php endwhile; endif;?>

</div>

<?php get_footer();?>