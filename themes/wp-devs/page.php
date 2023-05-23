<?php get_header(); ?>
<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!-- content area -->
<div class="site-content" id="content">
    <div class="content-area" id="primary">

        <div class="site-main" id="main">

            <div class="container">

                <div class="page-item">

                    <?php
                    while (have_posts()) : the_post();
                    ?>
                        <article>
                            <header>
                                <h1><?php the_title(); ?> </h1>
                            </header> <?php the_content(); ?>
                        </article>
                    <?php
                    endwhile;
                    ?>
                </div>

            </div>


        </div>

    </div>

</div>
<?php get_footer(); ?>