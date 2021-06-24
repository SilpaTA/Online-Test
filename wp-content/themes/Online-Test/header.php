<?php
/**
 * Header file for the Online Test WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Online Test
 * @since Online Test 1.0
 */

?><!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

	<div class="main-area">
		<div class="row">

		<div class="left-section col-lg-1">
			
				<p><a href="mailto:info@dummysite.com">info@dummysite.com</a></p>
				<p><a href="tel:(+1) 36624 387">(+1) 36624 387</a></p>
			
		</div>
		<div class="col-lg-11">
		<header>
		 	<div class="header-main ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                              
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                	<?php 
										$args = array(
										    'menu_class' => 'navbar-nav m-auto',        
										    'menu' => 'main-menu'
										);
										wp_nav_menu( $args ); 
									?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

	