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

                    <h2>Latest News</h2>
                <div class="container">      
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_per_page' => 5,
                            'category__in' => array(3,6,9
                            ),
                            'category__not_in'=> array(1  
                            )
                        );

                $postlist = new WP_Query($args);


                        if ($postlist -> have_posts()) :
                            while ($postlist -> have_posts()) : $postlist -> the_post();
                     get_template_part( 'parts/content', 'latest-news' );
                            endwhile;
                            wp_reset_postdata();
                        else : ?> ?>
                            <p>There are no posts!</p>
                        <?php endif;
                        ?>



                    

                </div>

            </sectiom>
        </div>

    </div>

</div>
<?php get_footer(); ?>