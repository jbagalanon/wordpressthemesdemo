<?php get_header(); ?>

        <!-- content area -->
        <div class="site-content" id="content">
            <div class="content-area" id="primary">

                <div class="site-main" id="main">
                    <section class="hero">
                        Hero

                    </section>
                    <section class="services">
                        Services
                    </section>
                    <sectiom class="home-blog">
                        <?php 
                        if (have_posts()):
                            while (have_posts(  )): the_post(  );
                            ?> 
                            <article> 
                            <h2><?php the_title(); ?> </h2>
                            <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?>
                            by <?php the_author_posts_link(); ?>                             
                            </p>
                            <p>Categories: <?php the_category('');  ?></p>
                            <p>Tags: <?php the_tags('', ',  ' ); ?> </p>

                            </div>
                          

                            <?php  the_content(); ?>
                            </article>                         
                            <?php
                        endwhile;
                        else: ?>                            ?>
                            <p>There are no posts!</p> 
                            <?php endif;                 
                        ?>
                    </sectiom>
                </div>

            </div>

        </div>
<?php get_footer(); ?>