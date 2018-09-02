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
                            <h1>Blog</h1>
                        </div>
                        <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Blog Grid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="sidebar-page-container">
		    	<div class="auto-container">
		        	<div class="row clearfix">
		                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
							<div class="causes-list">
								<?php if (isset($error_question)) : ?>
									<div class="text-center">
										<h2>No Question</h2>
									</div>
								<?php else : ?>
									<?php foreach ($question_key as $key => $question_data) : ?>
				                        <div class="causes-block-two">
				                            <div class="inner-box">
				                            	<div class="row clearfix">
				                                    <div class="content-column col-md-12 col-sm-12 col-xs-12">
				                                        <div class="inner-column">
				                                            <h3><?= $question_data->questions  ?></h3>
				                                            <div class="skills style-two">
				                                                <div class="clearfix donate-percent">
				                                                    <div class="pull-left number"><b><?= $question_data->created_date ?></b>  Answerd by moderetor</div>
				                                                    <div class="pull-right number">Question Posted By <b><?= $question_data->username ?></b></div>
				                                                </div>
				                                            </div>
				                                            <div class="btns-box">
				                                                <a href="<?= base_url('answer') ?>/<?= $question_data->id ?>" class="theme-btn btn-style-two">Answer</a>
				                                            </div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
			                    	<?php endforeach ; ?>
		                    	<?php endif ; ?>
		                    </div>
		                </div>
		                
		                <!--Sidebar Side-->
		                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
		                	<?php $this->load->view('frontend/common/sidebar_right') ?>
		                </div>
		                
		            </div>
		        </div>
		    </div>
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