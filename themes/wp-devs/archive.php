<?php get_header(); ?>

<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!-- content area -->
<div class="site-content" id="content">
    <div class="content-area" id="primary">       
        <main class="site-main" id="main">
            <?php the_archive_title('<h1 class="archive-title">', '</h1>' );?>
                <div class="container">
                <div class="archive-items">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                <a href= "<?php the_permalink(); ?>"> <?php the_post_thumbnail(array(275, 275));  ?> </a>
                                <div class="meta-info">
                                    <p>Posted in <?php echo get_the_date(); ?>
                                        by <?php the_author_posts_link(); ?>
                                    </p>
                                    <p>Categories: <?php the_category('');  ?></p>
                                    <p>Tags: <?php the_tags('', ',  '); ?> </p>

                                </div>

                                <?php the_excerpt(); ?>
                            </article>
                        <?php                    
                        endwhile;
                        ?>
                            <div class="wpdevs-pagination">
                        
                                <div class="pages new">
                                    <?php previous_post_link ("<< Newer posts"); ?>                        
                            </div>

                            <div class="pages old">
                                <?php next_post_link("Older posts");?>
                            </div>
                            </div>
                            
                            <?php 

                        else : ?>
                            <p>There are no posts!</p>
                        <?php endif; ?>

                </div>

                <?php get_sidebar(); ?>

            </div>
        </main>
    </div>

</div>
<?php get_footer(); ?>