<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softlab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header section Start -->
    <header class="header-wrap py-3 px-2">
        <div class="container d-flex justify-content-between align-items-center p-0">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

				<?php 
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
						}
			 	?>
                </a>
            </div>
            <div class="header-right-area d-flex">
                <div class="main-menu d-none d-xl-block">

				
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							
						)
					);
				?>
				
                   
                </div>
                <div class="header-right-elements d-flex align-items-center justify-content-between">
                    <a href="#" class="theme-btn head_btn d-none d-sm-block"><svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5714 5.77778C14.5714 7.31014 13.9844 8.77974 12.9396 9.86328C11.8947 10.9468 10.4776 11.5556 9 11.5556C7.52237 11.5556 6.10525 10.9468 5.0604 9.86328C4.01556 8.77974 3.42857 7.31014 3.42857 5.77778C3.42857 4.24542 4.01556 2.77582 5.0604 1.69227C6.10525 0.608728 7.52237 0 9 0C10.4776 0 11.8947 0.608728 12.9396 1.69227C13.9844 2.77582 14.5714 4.24542 14.5714 5.77778ZM3.42857 13.3333C2.51926 13.3333 1.64719 13.7079 1.00421 14.3747C0.361223 15.0415 0 15.9459 0 16.8889C0 16.8889 0 24 9 24C18 24 18 16.8889 18 16.8889C18 15.9459 17.6388 15.0415 16.9958 14.3747C16.3528 13.7079 15.4807 13.3333 14.5714 13.3333H3.42857Z" fill="url(#paint0_linear_2013_4095)"/>
                        <defs>
                        <linearGradient id="paint0_linear_2013_4095" x1="2.25" y1="4.8" x2="14.8454" y2="20.4173" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0.79"/>
                        <stop offset="1" stop-color="white" stop-opacity="0.27"/>
                        </linearGradient>
                        </defs>
                        </svg>
                         My account</a>
                    <div class="d-inline-block ms-4 d-xl-none">
                        <div class="mobile-nav-wrap">                    
                            <div id="hamburger">
                                <i class="fal fa-bars"></i>
                            </div>
                           
                            <div class="mobile-nav">
                                <button type="button" class="close-nav">
                                    <i class="fal fa-times-circle"></i>
                                </button>
                                <nav class="sidebar-nav">
                                <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'menu-1',
                                                'menu_class' => 'metismenu active',
                                                "menu_id" => 'mobile-menu'
                                                
                                            )
                                        );
                                    ?>
                                    <!-- <ul class="metismenu active" id="mobile-menu">
                                        <li><a href="index.html">Products<i class="fas fa-angle-down"></i></a> -->
                                            <!-- <ul class="sub-menu">
                                                <li class="sub_menu_item active">
                                                    <a href="#" class="d-flex align-items-center gap-3 rounded-3 p-3">
                                                        <div class="menu_icon">
                                                            <div class="icons">
                                                                <img src="./assets/img/drive.svg" alt="drive icon">
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h6>Integrate Google Drive</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="sub_menu_item">
                                                    <a href="#" class="d-flex align-items-center gap-3 rounded-3 p-3">
                                                        <div class="menu_icon">
                                                            <div class="icons">
                                                                <img src="./assets/img/play.svg" alt="play icon">
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h6>Integrate Google Drive</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="sub_menu_item">
                                                    <a href="#" class="d-flex align-items-center gap-3 rounded-3 p-3">
                                                        <div class="menu_icon">
                                                            <div class="icons">
                                                                <img src="./assets/img/network.svg" alt="network icon">
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h6>Integrate Google Drive</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul> -->
                                        <!-- </li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Docs</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul> -->
                                </nav>
        
                                <div class="action-bar my-3">
                                    <a href="contact.html" class="d-btn theme-btn d-none d-md-block">Free Consultation</a>
                                </div>
                            </div>                            
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header section End -->
