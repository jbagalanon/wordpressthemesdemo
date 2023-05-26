<article id="post-<?php the_ID();?> " <?php post_class()?> >

        <header>
            <h1><?php the_title(); ?></h1>                    
                <div class="meta-info">
                    <p>Posted in <?php echo get_the_date(); ?>
                    by <?php the_author_posts_link(); ?>
                    </p>
                    <?php if (has_category()): ?>
                    <p>Categories: <?php the_category('');  ?></p>
                <?php endif; ?>
                
                    <p>Tags: <?php the_tags('', ',  '); ?> </p>
                </div>
        </header>

    <?php the_content(); ?>
    <?php wp_link_pages('nextpagelink')?>
</article>