<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="UTF-8" />
        <title>
            <?php if (is_home()) { echo bloginfo('name');
            } elseif (is_front_page()) {
                echo bloginfo('name');
            } elseif (is_404()) {
                _e("404 error nothing found", "itb");
            } elseif (is_category()) {
                _e("Category", "itb"); wp_title('');
            } elseif (is_search()) {
                _e("Search", "itb");
            } elseif ( is_day() || is_month() || is_year() ) {
                _e("Archive", "itb"); wp_title('');
            } else {
                echo wp_title('');
            }
            ?>
        </title>
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php wp_head(); ?>
        
        
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet"> 
        
    </head>

    <body>
    <header>
        <div id="header-content">
            <div class="header-row">
                <div class="header-container">
                    <nav class="header-main header-non-mobile-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="header-pic-wrap">
                                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                                    </div>
                                    <ul class="header-menu-ul">
                                        <a href="#about-content" class="header-li"><li class="header-menu-li about-opt">Apie</li></a>
                                        <a href="#partners-content" class="header-li"><li class="header-menu-li partners-opt">Prekiniai ženklai</li></a>
                                        <a href="#blog-content" class="header-li"><li class="header-menu-li blog-opt">Tinklaraštis</li></a>
                                        <a href="#forms-content" class="header-li"><li class="header-menu-li forms-opt">Kontaktai</li></a>
                                    </ul>

                                    <div class="header-dropdown-wrap">
                                            <a class="drop-down-frst toggle-slide" href="#" >
                                                <i class="fas fa-bars"></i>
                                            </a>
                                            <a class="drop-down-scnd toggle-slide" href="#">
                                                <i class="fas fa-times"></i>
                                            </a>
                                    
                                        <ul class="header-dropdown">
                                            <a href="#header-content" class="header-dropdown-li"><li>Pradžia</li></a>
                                            <a href="#about-content" class="header-dropdown-li"><li>Apie</li></a>
                                            <a href="#partners-content" class="header-dropdown-li"><li>Prekiniai ženklai</li></a>
                                            <a href="#blog-content" class="header-dropdown-li"><li>Tinklaraštis</li></a>
                                            <a href="#forms-content" class="header-dropdown-li"><li>Kontaktai</li></a>
                                        </ul>
                                    </div>
                        <!-- <div class="clearfix"></div>   -->
                                </div>
                            </div>
                        </div>
                    </nav> 

                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
                    <?php
                       
                        $args = array( 'post_type' => 'header', 'posts_per_page' => 1 ); 
                        $loop = new WP_Query( $args );
					        if ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="header-background remove">
                                    <div class="header-pic-container">
                                        <div class="header-pic">
                                            <?php  
                                            if(has_post_thumbnail() ):                
                                                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'large' ); 
                                                echo '<img src="' . $image_src[0]  . '"width="100%"; height="500px"  />'; 
                                            ?>
                                        </div>
                                    </div>
                                    <div class="synergies-wrap">
                                        <div class="synergies-click">
                                            <a><h1 class="synergy-txt">Sinergija</h1>
                                            <div class="arrow-down"><i class="fas fa-chevron-down"></i></div>
                                            <div class="arrow-up"><i class="fas fa-chevron-up"></i></div>
                                            </a>
                                        </div>
                                        <ul class="synergy-list synergy-list-flex synergy-list-responsive">
                                            <a href="#" class="smalsumas"><li ><h1>Smalsumas</h1></li></a>
                                            <a href="#" class="refleksija"><li ><h1>Refleksija</h1></li></a>
                                            <a href="#" class="troskimai"><li ><h1>Troškimai</h1></li></a>
                                            <a href="#" class="pusiausvyra"><li ><h1>Pusiausvyra</h1></li></a>
                                            <a href="#" class="sistema"><li ><h1>Sistema</h1></li></a>
                                        </ul>    
                                    </div>
                                    <?php endif?>
                                    <?php endif; break; ?>
                                </div>
                                    
                    <?php endwhile; endif; ?>  
                </div>
            </div>
        </div>
    </header>

  


