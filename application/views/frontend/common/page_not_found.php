<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>CharityPoint HTML Template | Donate</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php $this->load->view('frontend/common/css') ?>

</head>

<body>

<div class="page-wrapper">
    <?php $this->load->view('frontend/common/header') ?>
    <section class="page-title" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/banner-4.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="title-column col-md-6 col-sm-8 col-xs-12">
                	<h1>Page Not Found</h1>
                </div>
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Page Not Found</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="eror-section">
        <div class="auto-container">
            <div class="error-text">4<span class="theme_color">0</span>4</div>
            <h4>Page Not Found</h4>
            <div class="text">Please try one of the following pages:</div>
            <a href="<?= base_url() ?>" class="theme-btn btn-style-one">Home Page</a>
        </div>
    </section>
    <section class="clients-section" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/1.jpg)">
        <div class="auto-container">
            <div class="sponsors-outer">
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
    <?php $this->load->view('frontend/common/footer') ?>
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?php $this->load->view('frontend/common/js') ?>
</html>