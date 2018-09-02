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
                	<h1>Ask Question</h1>
                </div>
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Ask Question</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="donate-now">
        <div class="auto-container">
            <div class="default-form">
                <div class="row clearfix">
                    <div class="left-column col-md-8 col-sm-12 col-xs-12">
                        <div class="default-title"><h3>Ask Question</h3></div>
                        <?php if ($this->session->flashdata('success_question')) : ?>
                            <div class="alert alert-success">
                                <strong><center><?= $this->session->flashdata('success_question') ; ?></center></strong>
                            </div>
                        <?php endif ; ?>
                        <?= form_open('question_process') ?>
                        <div class="row clearfix">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Would you like to make a regular donation?</div>
                                <select name="category" class="custom-select-box">
                                    <option value="">Select Category</option>
                                    <?php foreach ($category as $category_data) : ?>
                                        <option value="<?= $category_data->id ?>"><?= $category_data->category_name ?></option>
                                    <?php endforeach ; ?>
                                </select>
                                <?php if ($this->session->flashdata('category_error')) : ?>
                                    <span class="text-danger"><?= $this->session->flashdata('category_error') ?></span>
                                <?php endif ; ?>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="question" placeholder="Enter Your Question"></textarea>
                                <?php if ($this->session->flashdata('question_error')) : ?>
                                    <span class="text-danger"><?= $this->session->flashdata('question_error') ?></span>
                                <?php endif ; ?>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                               <button type="submit" class="theme-btn btn-style-one">Submit Question</button>
                            </div>
                        </div>
                        <?= form_close() ?>
                        <br>

                        <?php foreach ($question_key as $key => $question_data) : ?>
                            <div class="content-column col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-column">
                                    <h3><?= $question_data->questions ?></h3>
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
                        <?php endforeach ; ?>

                    </div>

                    <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <?php $this->load->view('frontend/common/sidebar_right') ?>
                    </div>
                </div>  
            </div>
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