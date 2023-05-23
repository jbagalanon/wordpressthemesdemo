<!-- Template Name: General Template -->

<?php get_header(); ?>

        <!-- content area -->
        <div class="site-content" id="content">
            <div class="content-area" id="primary">

                <div class="site-main" id="main">
            
                    <sectiom class="home-blog">

                    <div class="container">

                    <div class="general-template">

                <?php 
                        if (have_posts()):
                            while (have_posts(  )): the_post(  );
                            ?> 
                            <article> 
                            <h2><?php the_title(); ?> </h2>
                         
                            <?php  the_content(); ?>
                            </article>                         
                            <?php
                        endwhile;
                        else: ?>                            ?>
                            <p>There are no posts!</p> 
                            <?php endif;                 
                        ?>



                    </div>

                    </div>
                       
                    </sectiom>
                </div>

            </div>

        </div>
<?php get_footer(); ?>

