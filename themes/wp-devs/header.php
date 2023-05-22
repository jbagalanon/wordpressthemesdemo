<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo ('charset');  ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
       
    <div class="site" id="page">
        <header>

        <section>
            <div class="top-bar">
                <div class="logo">
                Site Logo
                </div>

                <div class="searchbox">
                    
            </div>            
        </section>

        <section class="menu-area">
            <div class="container">
              <nav class="main-menu">
          <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth' => 2 )); ?>
                </nav>
            </div>
        

        </section>  

        </header>