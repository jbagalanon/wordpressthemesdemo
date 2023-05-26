<?php get_header(); ?>

<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!-- content area -->
<div class="site-content" id="content">
    <div class="content-area" id="primary">       
        <main class="site-main" id="main">
            <?php the_archive_title('<h1 class="archive-title">', '</h1>' );?>
            <?php the_archive_description('<div class="archive-description">', '</div>'  );?>
                <div class="container">
                <div class="archive-items">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                   get_template_part( 'parts/content');            
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