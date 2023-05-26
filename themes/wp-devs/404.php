<?php get_header(); ?>
<div id="content" class="site-content">
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="error-404">
                <header>
                    <h1>Page not found</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nesciunt suscipit consectetur! Repellendus, odit omnis!</p>
                </header>
                <div class="error">
                    <p>You may do searching</p>
                    <?php get_search_form();?> 
                    <?php the_widget( 'WP_Widget_Recent_Posts', array(
                        'title' => 'Latest Posts',
                        'number' => 3
                    ))?>
                </div>
            </div>
        </div>
    </main>
</div>


</div> 