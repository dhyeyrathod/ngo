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
            <section class="blog-page-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <?php foreach ($blog_data as $key => $blog_content) : ?>
                        <div class="news-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img style="width: 370px;height: 250px;" src="<?= base_url('assets/blog_images') ?>/<?= $blog_content->image ?>" alt="<?= $blog_content->title ?>"  />
                                    <a href="<?= base_url('blog_detail') ?>/<?= $blog_content->id ?>/<?=str_replace(" ","_",$blog_content->title) ?>" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-content">
                                    <div class="post-date"><?= date('d',strtotime(str_replace('-','/', $blog_content->created_date))) ?><span><?= date('M',strtotime(str_replace('-','/',$blog_content->created_date))) ?></span></div>
                                    <h3><a href="<?= base_url('blog_detail') ?>/<?= $blog_content->id ?>/<?=str_replace(" ","_",$blog_content->title) ?>"><?= mb_substr($blog_content->title, 0, 40) ?><?= (strlen($blog_content->title) > 40) ? '...' : ''; ?></a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><span class="icon flaticon-user-1"></span><?= $blog_content->username ?></a></li>
                                        <li><a href="#"><span class="icon flaticon-speech-bubble"></span><?= $blog_content->comment_count ?></a></li>
                                    </ul>
                                    <div class="text"><?= mb_substr($blog_content->description, 0, 100) ?><?= (strlen($blog_content->description) > 100) ? '...' : ''; ?></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ; ?>
                    </div>
                    <div class="text-center">
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <h3><center><?= $this->pagination->create_links(); ?></center></h3>
                            </ul>
                        </div>
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