<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg  full-height ">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css"> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="theme-bg"></div>

<!--------Header Start---------->
  <!-- <div class="mainloader" >  
   
    </div>  -->


<!-- Header -->
<nav class="navbar navbar-expand-lg  ">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <span class="logo-text first-text">Scoped</span>
            <span class="logo-text second-text">Insights</span>
        </a> 
        <span class="divide-line"></span>
        
        <div class="navbar_right"> 
                  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                   <!--START CODE USE FOR GETTING HEADER_MENU-->
					<?php
						$defaults = array(
						'theme_location'  => '',
						'menu'            => 'Header Menu',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'walker'          => ''
						);

						wp_nav_menu( $defaults );
					?>
					<!--END OF CODE USE FOR GETTING HEADER_MENU-->
                </ul>
            </div> 
            <div class="navbar_right_sub">
                <ul>
                        <li><a href="javscript:void();" id="search_btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0);" class="theme_btn" id="change_theme_btn">
                            <svg  class="theme-svg " width="19" height="19" viewBox="0 0 19 19">
                                <defs>
                                </defs>
                                <g id="Icon_-_Dark_Mode" data-name="Icon - Dark Mode" transform="translate(-1740 -72)">
                                    <path id="Path_1" d="M3731.138 82c-.072.128 16.74 0 16.74 0s-.012 7.253-8.089 8.043-8.579-8.171-8.651-8.043z" class="cls-1" data-name="Path 1" transform="rotate(-90 2744.009 1076.545)"/>
                                    <g id="Ellipse_1" class="cls-2" data-name="Ellipse 1" transform="translate(1740 72)">
                                        <circle cx="9.5" cy="9.5" r="9.5" class="cls-3"/>
                                        <circle cx="9.5" cy="9.5" r="8.5" class="cls-4"/>
                                    </g>
                                </g>
                            </svg>

                              
                    </a></li>
                </ul>
            </div>
          
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="nav_toggle_svg" width="20" height="13.921" viewBox="0 0 20 13.921">
                        <defs>
                        </defs>
                        <g id="Icon_-_Menu" data-name="Icon - Menu" transform="translate(1 1)">
                            <path id="Shape" d="M0 0h18" class="cls-1" transform="translate(0 6)"/>
                            <path id="Shape-2" d="M0 0h18" class="cls-1" data-name="Shape"/>
                            <path id="Shape-3" d="M0 0h12.594" class="cls-1" data-name="Shape" transform="translate(5.406 11.921)"/>
                        </g>
                    </svg>
                </button>
        </div>
	</div>   
</nav>
<!-- Header  End-->
