<?php get_header(); ?>
<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!-- content area -->
<div class="site-content" id="content">
    <div class="content-area" id="primary">

        <div class="site-main" id="main">
            <section class="hero">
                Hero

            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                            if (is_active_sidebar('services-1')){
                                dynamic_sidebar('services-1');
                            }

                        ?>
                    </div>
                    <div class="services-item">
                        <?php

                             if (is_active_sidebar('services-2')){
                                dynamic_sidebar('services-2');
                            }


                        ?>
                    </div>
                    <div class="services-item">
                        <?php

                             if (is_active_sidebar('services-3')){
                                dynamic_sidebar('services-3');
                            }


                        ?>
                    </div>
                </div>
            </section>
            <sectiom class="home-blog">

                <div class="container">

                    <div class="blog-items">

                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <article>
                                    <h2><?php the_title(); ?> </h2>
                                    <div class="meta-info">
                                        <p>Posted in <?php echo get_the_date(); ?>
                                            by <?php the_author_posts_link(); ?>
                                        </p>
                                        <p>Categories: <?php the_category('');  ?></p>
                                        <p>Tags: <?php the_tags('', ',  '); ?> </p>

                                    </div>


                                    <?php the_content(); ?>
                                </article>
                            <?php
                            endwhile;
                        else : ?> ?>
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