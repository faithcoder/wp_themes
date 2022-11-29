<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Halim | Multipurpose Busienss Website</title>
    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    
    <!-- Top Area Start Here -->
    <section class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="top-left">
                        <a href="mailto:info@halim.com"><i class="far fa-envelope"></i> info@halim.com</a>
                        <a href="tel:+123456789"><i class="fas fa-phone-alt"></i> +123456789</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="top-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Area End Here -->

   <!-- Header Area Start Here -->
   <header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="<?php echo site_url(); ?>">Faith Business</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <!-- <ul>
                                <li><a class="nav-link" href="index.html">Home</a></li>
                                <li class="caret"><a class="nav-link" href="about.html">About</a>
                                    <ul>
                                        <li><a href="">About Style 1</a></li>
                                        <li><a href="">About Style 2</a></li>
                                        <li><a href="">About Style 3</a></li>          
                                        <li><a href="">About Style 4</a></li>
                                        <li><a href="">About Style 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="services.html">Services</a></li>
                                <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                                <li class="caret"><a class="nav-link" href="gallery.html">Gallery</a>
                                    <ul>
                                        <li><a href="">Gallery Style 1</a></li>
                                        <li><a href="">Gallery Style 2</a></li>
                                        <li><a href="">Gallery Style 3</a></li>          
                                        <li><a href="">Gallery Style 4</a></li>
                                        <li><a href="">Gallery Style 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                <li><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul> -->

                            <?php wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'navbar-nav ml-auto',

                            )); ?> 
                        </div>
                      </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->