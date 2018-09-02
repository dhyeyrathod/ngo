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
                	<h1>Contact</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="info-contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box">
                            <span class="icon flaticon-world"></span>
                        </div>
                        <h3>Address</h3>
                        <div class="text">Cecil Sharp House14 Tottenham <br> Court Road, NewYark.</div>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box">
                            <span class="icon flaticon-technology-1"></span>
                        </div>
                        <h3>Phone</h3>
                        <div class="text">You call us on phone number. <br> 1(784)-775-97-377</div>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="icon-box">
                            <span class="icon flaticon-symbol"></span>
                        </div>
                        <h3>Email</h3>
                        <div class="text">info@yoursite.com <br> www.infoyoursite.com</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <div class="contact-form-section">
        <div class="auto-container">
            <h2>Get in Touch</h2>
            <div class="text">if you want to get more info, ping us now.</div>
            
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="" id="contact-form" novalidate="novalidate">
                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="name" value="" placeholder="Name" required="">
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email" required="">
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="subject" value="" placeholder="Subject" required="">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="theme-btn btn-style-two">Send Now</button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>


    
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