<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>CharityPoint HTML Template | Donate</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php $this->load->view('frontend/common/css') ?>

<style type="text/css">
    span{
        color: red;
    }
</style>

</style>
</head>

<body>
<div class="page-wrapper">
    <?php $this->load->view('frontend/common/header') ?>
    <section class="page-title" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/banner-4.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-8 col-xs-12">
                    <h1>Login</h1>
                </div>
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="donate-now">
        <div class="auto-container">
            <div class="default-form">
                <div class="row clearfix">
                    <?php if ($this->session->flashdata('ask_question_flash')) :  ?>
                    <div class="alert alert-danger">
                        <strong><center><?= $this->session->flashdata('ask_question_flash') ; ?></center></strong>
                    </div>
                    <?php endif ; ?>
                    <div class="left-column col-md-6 col-sm-12 col-xs-12">
                        <div class="default-title"><h3>Login</h3></div>
                        <div class="row clearfix">
                            <?= form_open('login_process') ?>
                            <?php if ($this->session->flashdata('login_faild')) :  ?>
                            <div class="alert alert-danger">
                                <strong><?= $this->session->flashdata('login_faild') ; ?></strong>
                            </div>
                            <?php endif ; ?>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="email" placeholder="Enter Email Id" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="password" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                               <button type="submit" class="theme-btn btn-style-one">Login</button>
                            </div>
                            <?= form_close() ; ?>
                        </div>
                    </div>
                    <div class="right-column col-md-6 col-sm-12 col-xs-12">
                        <div class="default-title"><h3>Sign Up</h3></div>
                        <?php if ($this->session->flashdata('success_signup')) :  ?>
                        <div class="alert alert-success">
                            <strong><?= $this->session->flashdata('success_signup') ; ?></strong>
                        </div>
                        <?php endif ; ?>
                        <?php if ($this->session->flashdata('failer_signup')) :  ?>
                        <div class="alert alert-danger">
                            <strong><?= $this->session->flashdata('failer_signup') ; ?></strong>
                        </div>
                        <?php endif ; ?>
                        <div class="row clearfix">
                            <?= form_open('signup_process') ?>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="username" placeholder="Enter Username">
                                <span><?php if ($this->session->flashdata('username_error')) : echo $this->session->flashdata('username_error') ; endif ; ?></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="email" name="email" placeholder="Enter Email" required>
                                <span><?php if ($this->session->flashdata('email_error')) : echo $this->session->flashdata('email_error') ; endif ; ?></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" class="password" name="password" placeholder="Enter Password" required>
                                <span><?php if ($this->session->flashdata('password_error')) : echo $this->session->flashdata('password_error') ; endif ; ?></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="contact_number" placeholder="Enter Contact Number" required>
                                <span><?php if ($this->session->flashdata('contact_number')):echo $this->session->flashdata('contact_number') ; endif ; ?></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                               <button type="submit" class="theme-btn btn-style-one">Sign Up</button>
                            </div>
                            <?= form_close() ; ?>
                        </div>
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