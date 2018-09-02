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
            <?php $this->load->view('frontend/common/header') ?>
            <section class="page-title" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/banner-4.jpg);">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-md-6 col-sm-8 col-xs-12">
                            <h1>gallery</h1>
                        </div>
                        <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                            <ul class="bread-crumb clearfix">
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li class="active">gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="gallery-page-section style-two">
		    	<div class="auto-container">
		            <div class="row clearfix">
		                <?php foreach ($blog_model_key as $key => $blog_model_data) : ?>
			                <div class="gallery-block style-two col-md-4 col-sm-6 col-xs-12">
			                    <div class="inner-box">
			                        <div class="image">
			                            <img style="width: 370px;height: 260px;" src="<?= base_url('assets/gallery_image') ?>/<?= $blog_model_data->image_name ?>" alt="">
			                            <div class="overlay-box">
			                                <div class="content">
			                                    <h3><a href="gallery-single.html"><?= $blog_model_data->category_name ?></a></h3>
			                                    <ul class="option-list">
			                                        <li><a class="lightbox-image" href="<?= base_url('assets/gallery_image') ?>/<?= $blog_model_data->image_name ?>" data-fancybox-group="gallery-one"><span class="la la-arrows"></span></a></li>
			                                        <li><a href="gallery-single.html"><span class="la la-chain"></span></a></li>
			                                    </ul>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
		            	<?php endforeach ; ?>
		            </div>
		        </div>
		    </section>


            <section class="clients-section" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/1.jpg)">
                <div class="auto-container">
                    <div class="sponsors-outer">
                        <ul class="sponsors-carousel owl-carousel owl-theme">
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/1.png" alt=""></a></figure>
                            </li>
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/2.png" alt=""></a></figure>
                            </li>
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/3.png" alt=""></a></figure>
                            </li>
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/4.png" alt=""></a></figure>
                            </li>
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/1.png" alt=""></a></figure>
                            </li>
                            <li class="slide-item">
                                <figure class="image-box"><a href="#"><img src="<?= base_url('assets/frontend') ?>/images/clients/2.png" alt=""></a></figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <?php $this->load->view('frontend/common/footer') ?>
        </div>
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
        <?php $this->load->view('frontend/common/js') ?>
    </body>
</html>