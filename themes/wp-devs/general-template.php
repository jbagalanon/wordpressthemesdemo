<!-- Template Name: General Template -->

<?php get_header(); ?>
<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!-- content area -->
<div class="site-content" id="content">
    <div class="content-area" id="primary">

        <div class="site-main" id="main">

            <sectiom class="home-blog">

                <div class="container">

                    <div class="general-template">

                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <article>
                                    <h2><?php the_title(); ?> </h2>

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