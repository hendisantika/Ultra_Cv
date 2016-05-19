<body>
    <!-- Load page -->
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- End load page -->

    <div id="wraper">
<?php 
foreach ($cv->result() as $verlishow);
?>
        <!-- Start Home-header section -->
        <section class="home-header border-bottom padding-block">
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-lg-5 text-center border-right">
                        <!-- Your foto -->
                        <div class="foto">
                            <img src="<?php echo base_url('gui/assets/ultraviolet_avatar/'.$verlishow->avatar.'   ');?>" alt="Ukieweb">
                        </div>
                        <!-- end your foto -->
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 text-center">
                        <!-- Your Name -->

                        <h1 class="title"><?php echo $verlishow->username;?></h1>
                        
                        <!-- Your Profession -->
                        <h3 class="sub-title">Web Designer & Mobile Application Developer</h3>
                        <!-- social icon -->
                        <div class="social">
                            <ul class="animated" data-animation="fadeIn" data-animation-delay="600">
                                <!-- social icons -->
                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-youtube"></i></a></li>
                                <!--
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-digg"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-deviantart"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-envelope-square"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-delicious"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-dropbox"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-github-alt"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-renren"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-xing"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-weibo"></i></a></li>
                                    <li><a class="ukie-icons hover-animate" href="#"><i class="fa fa-rss"></i></a></li>
                                -->
                            </ul>
                        </div>
                        <!-- end social icon -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- End Home-header section -->

        <!-- Start Menu section -->
        <nav class="menu-style1">
            <!-- start container -->
            <div class="container">
                <!-- start row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12">

                        <!-- start menu block (profile) -->
                        <a href="<?php echo base_url('frontend/profile');?>" class="menu-li">
                            <!-- img menu block -->
                            <span class="foto">
                                <img src="<?php echo base_url('gui/assets/img/menu/style1/profile.png" class="menu-img');?>" data-img-name="profile" alt="Ukieweb">
                            </span>
                            <!-- name menu block -->
                            <span class="name">Profile</span>
                        </a>
                        <!-- end menu block (profile) -->

                        <!-- start menu block (resume) -->
                        <a href="resume.html" class="menu-li">
                            <!-- img menu block -->
                            <span class="foto">
                                <img src="<?php echo base_url('gui/assets/img/menu/style1/resume.png');?>" class="menu-img" data-img-name="resume" alt="Ukieweb">
                            </span>
                            <!-- name menu block -->
                            <span class="name">Resume</span>
                        </a>
                        <!-- end menu block (resume) -->

                        <!-- start menu block (portfolio) -->
                        <a href="portfolio.html" class="menu-li">
                            <!-- img menu block -->
                            <span class="foto">
                                <img src="<?php echo base_url('gui/assets/img/menu/style1/portfolio.png');?>" class="menu-img" data-img-name="portfolio" alt="Ukieweb">
                            </span>
                            <!-- name menu block -->
                            <span class="name">Portfolio</span>
                        </a>
                        <!-- end menu block (portfolio) -->

                        <!-- start menu block (blog) -->
                        <a href="blog.html" class="menu-li">
                            <!-- img menu block -->
                            <span class="foto">
                                <img src="<?php echo base_url('gui/assets/img/menu/style1/blog.png');?>" class="menu-img" data-img-name="blog" alt="Ukieweb">
                            </span>
                            <!-- name menu block -->
                            <span class="name">Blog</span>
                        </a>
                        <!-- end menu block (portfolio) -->

                        <!-- start menu block (contact) -->
                        <a href="contact.html" class="menu-li">
                            <!-- img menu block -->
                            <span class="foto">
                                <img src="<?php echo base_url('gui/assets/img/menu/style1/contact.png');?>" class="menu-img" data-img-name="contact" alt="Ukieweb">
                            </span>
                            <!-- name menu block -->
                            <span class="name">Contact</span>
                        </a>
                        <!-- end menu block (contact) -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </nav>
        <!-- End Menu section -->
