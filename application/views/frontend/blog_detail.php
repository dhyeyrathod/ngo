<?php 
// echo "<pre>";
// print_r($blog_details);
// exit;
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title><?= $blog_details->title ?></title>
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
                     <h1>Blog Detail</h1>
                  </div>
                  <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                     <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">Blog Detail</li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <div class="sidebar-page-container">
            <div class="auto-container">
               <div class="row clearfix">
                  <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                     <div class="blog-single">
                        <div class="inner-box">
                           <div class="image">
                              <img src="<?= base_url('assets/blog_images') ?>/<?= $blog_details->image ?>" alt="" />
                              <div class="post-date"><?= date('d',strtotime(str_replace('-','/', $blog_details->created_date))) ?><span><?= date('M',strtotime(str_replace('-','/',$blog_details->created_date))) ?></span></div>
                           </div>
                           <h3><?= $blog_details->title ?></h3>
                           <ul class="post-meta">
                              <li><span class="icon flaticon-user-1"></span>Admin</li>
                              <li><span class="icon flaticon-speech-bubble"></span>4</li>
                              <li><span class="icon fa fa-eye"></span>75</li>
                           </ul>
                           <div class="text text-justify">
                              <p><?= $blog_details->description ?></p>
                           </div>
                           <div class="post-share-options clearfix">
                              <div class="pull-left tags">
                              	<span>Tags:</span>
                              	<?php foreach (explode(",", $blog_details->tags) as $key => $tags) : ?>
                              		<a href="<?= base_url('blog') ?>/<?= trim($tags) ?>"><?= $tags ?></a>, 
                              	<?php endforeach ;?>	
                              </div>
                              <div class="pull-right">
                                 <ul class="social-icon-three">
                                    <li class="share">Share:</li>
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php if ($comments_key) : ?>
                        <div class="comments-area">
                           <div class="sec-title">
                              <h2>Comments</h2>
                           </div>
                           <?php foreach ($comments_key as $comments_data) : ?>
                              <div class="comment-box">
                                 <div class="comment">
                                    <div class="author-thumb"><img src="<?= base_url('assets/frontend') ?>/images/resource/user.jpg" alt=""></div>
                                    <div class="comment-inner">
                                       <div class="comment-info clearfix">
                                          <strong><?= $comments_data->username ?></strong>
                                          <div class="comment-time"><?= $comments_data->created_date ?></div>
                                       </div>
                                       <div class="text"><?= $comments_data->comments ?></div>
                                    </div>
                                 </div>
                              </div>
                           <?php endforeach ; ?>
                        </div>
                     <?php endif ; ?>
                     <div class="comment-form">
                        <div class="group-title">
                           <h2>Leave Your Comments</h2>
                        </div>
                        <?= form_open('comments_process') ?>
                           <div class="row clearfix">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                 <textarea name="message" required placeholder="Your Comments"></textarea>
                              </div>
                              <input type="hidden" value="<?= $blog_details->id ?>" name="blog_id">
                              <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="blog_title">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                 <button class="theme-btn btn-style-two" type="submit" name="submit-form">Comments Post</button>
                              </div>
                           </div>
                        <?= form_close() ?>
                     </div>
                  </div>
                  <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                     <aside class="sidebar">
                        <div class="sidebar-widget categories-blog">
                           <div class="sidebar-title">
                              <h2>Categories</h2>
                           </div>
                           <div class="inner-box">
                              <ul>
                                 <li><a href="#">Education <span>15</span></a></li>
                                 <li><a href="#">Foods <span>24</span></a></li>
                                 <li><a href="#">Homeless <span>30</span></a></li>
                                 <li><a href="#">Clean Water <span>45</span></a></li>
                                 <li><a href="#">Cloth <span>18</span></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="sidebar-widget popular-posts">
                           <div class="sidebar-title">
                              <h2>Update News</h2>
                           </div>
                           <div class="inner-box">
                              <article class="post">
                                 <figure class="post-thumb"><a href="blog-single.html"><img src="<?= base_url('assets/frontend') ?>/images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                 <div class="text"><a href="blog-single.html">Providing Clothes for the children</a></div>
                                 <div class="post-info">250 Views</div>
                              </article>
                              <article class="post">
                                 <figure class="post-thumb"><a href="blog-single.html"><img src="<?= base_url('assets/frontend') ?>/images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                 <div class="text"><a href="blog-single.html">Clean Water Provide by Poor People!!</a></div>
                                 <div class="post-info">92 Views</div>
                              </article>
                              <article class="post">
                                 <figure class="post-thumb"><a href="blog-single.html"><img src="<?= base_url('assets/frontend') ?>/images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                 <div class="text"><a href="blog-single.html">Help hunger People!!</a></div>
                                 <div class="post-info">360 Views</div>
                              </article>
                           </div>
                        </div>
                        <div class="sidebar-widget">
                           <div class="sidebar-title">
                              <h2>Project Archives</h2>
                           </div>
                           <ul class="archive-list">
                              <li><a href="#">October <span>2014</span></a></li>
                              <li><a href="#">December<span>2015</span></a></li>
                              <li><a href="#">August <span>2016</span></a></li>
                              <li><a href="#">February <span>2017</span></a></li>
                           </ul>
                        </div>
                        <div class="sidebar-widget newsletter-widget">
                           <div class="inner-box">
                              <div class="sidebar-title">
                                 <h2>News Letter</h2>
                              </div>
                              <div class="text">Those were the days and we'll do it our way yes our way. Make our dreams come true for me.</div>
                              <div class="sidebar-newsletter-box">
                                 <form method="post" action="http://effortthemes.com/html/charitypoint/contact.html">
                                    <div class="form-group">
                                       <input type="email" name="email-field" value="" placeholder="Email....." required>
                                       <button type="submit"><span class="icon flaticon-symbol"></span></button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </aside>
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

      <script type="text/javascript">
         $(document).ready(function() {
           //run code that MUST be after initialize
         });
      </script>

   </body>
</html>
