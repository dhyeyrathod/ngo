<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Answer</title>
      <?php $this->load->view('frontend/common/css') ?>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   </head>
   <body>
      <div class="page-wrapper">
         <div class="preloader"></div>
         <?php $this->load->view('frontend/common/header') ?>
         <section class="page-title" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/banner-4.jpg);">
            <div class="auto-container">
               <div class="row clearfix">
                  <div class="title-column col-md-6 col-sm-8 col-xs-12">
                     <h1>Answer</h1>
                  </div>
                  <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                     <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Answer</li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <div class="sidebar-page-container">
            <div class="auto-container">
               <div class="row clearfix">
                  <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                     <div class="comments-area">
                        <div class="sec-title">
                           <h2><?= $question_key->question ?></h2>
                        </div>
                        <?php if (isset($error_answer)) : ?>
                           <center><h3>No answers yet</h3></center>
                        <?php else : ?>
                           <?php foreach ($answer_key as $answer_data) : ?>
                              <div class="comment-box">
                                 <div class="comment-inner">
                                    <div class="comment-info clearfix">
                                       Answer By Modrater
                                       <div class="comment-time"><?= $answer_data->created_date ?></div>
                                    </div>
                                    <div class="text"><strong><?= $answer_data->answer ?></strong></div>
                                 </div>
                              </div>
                           <?php endforeach ; ?>
                        <?php endif ; ?>
                     </div>
                  </div>
                  <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                     <?php $this->load->view('frontend/common/sidebar_right') ?>
                  </div>
               </div>
            </div>
         </div>
         <section class="clients-section" style="background-image:url(images/background/1.jpg)">
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