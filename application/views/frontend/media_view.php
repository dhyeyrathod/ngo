<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>CharityPoint HTML Template | About</title>
<?php $this->load->view('frontend/common/css') ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
    <!-- Main Header-->
    <?php $this->load->view('frontend/common/header') ?>
    <!--End Main Header -->
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/banner-4.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title -->
            	<div class="title-column col-md-6 col-sm-8 col-xs-12">
                	<h1>Media</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Media</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="project-section gallery-page-section">
        <div class="auto-container">
            
            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".homeless">Gallert</li>
                        <li class="filter" data-role="button" data-filter=".charity">Videos</li>
                        <li class="filter" data-role="button" data-filter=".food">Achievements</li>
                        <li class="filter" data-role="button" data-filter=".water">Press & Testimonials</li>
                    </ul>
                </div>
                
                <div class="items-container row clearfix" style="position: relative; height: 841.109px;">
                
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 0px; top: 0px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/1.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/1.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all charity food water col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 300px; top: 0px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/2.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/2.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all water col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 600px; top: 0px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/3.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/3.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 900px; top: 0px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/4.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/4.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all water food col-lg-6 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 0px; top: 280px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/5.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/5.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all charity homeless col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 900px; top: 280px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/6.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/6.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all charity food water col-lg-6 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 600px; top: 560px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/17.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/17.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 0px; top: 561px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/15.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/15.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block masonry-item all charity food water col-lg-3 col-md-6 col-sm-6 col-xs-12" style="position: absolute; left: 300px; top: 561px;">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?= base_url('assets/frontend') ?>/images/gallery/16.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3><a href="#">Homeless Child</a></h3>
                                        <ul class="option-list">
                                            <li><a class="lightbox-image" href="<?= base_url('assets/frontend') ?>/images/gallery/16.jpg" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
                                            <li><a href="#"><span class="la la-chain"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    <!--Clients Section-->
    <section class="clients-section" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/1.jpg)">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/2.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
    
    <!--Footer Style Two-->
    <?php $this->load->view('frontend/common/footer') ?>
   <!--Footer Style Two-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



<?php $this->load->view('frontend/common/js') ?>
</body>

<!-- Mirrored from effortthemes.com/html/charitypoint/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jun 2018 14:12:02 GMT -->
</html>