<?php 
// echo "<pre>";
// print_r($question_key);
// exit();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php $this->load->view('admin/common/css') ?>
   </head>
   <body class="app sidebar-mini rtl">
      <?php $this->load->view('admin/common/header') ?>
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <?php $this->load->view('admin/common/sidebar') ?>
      <main class="app-content">
         <div class="app-title">
            <div>
               <h1><i class="fa fa-th-list"></i> Data Table</h1>
               <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
               <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
               <li class="breadcrumb-item">Tables</li>
               <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
         </div>
         <?php if ($this->session->flashdata('normal_error')) :  ?>
            <div class="alert alert-danger">
               <strong><center><?= $this->session->flashdata('normal_error') ?></center></strong>
            </div>
         <?php endif ; ?>
         <?php if ($this->session->flashdata('normal_success')) :  ?>
            <div class="alert alert-success">
               <strong><center><?= $this->session->flashdata('normal_success') ?></center></strong>
            </div>
         <?php endif ; ?>
         <div class="row">
            <div class="col-md-12">
               <div class="tile">
                 <div class="row">
                    <div class="col-md-8">
                        <?= form_open_multipart('admin/blog/add_blog_process') ?>

                           <div class="form-group">
                              <label class="control-label">Title</label>
                              <input class="form-control" type="text" name="title">
                              <?php if ($this->session->flashdata('validation_error_title')) :  ?>
                                 <span class="text-danger"><?= $this->session->flashdata('validation_error_title') ?></span>
                              <?php endif ; ?>
                           </div>

                           <div class="form-group">
                              <label class="control-label">Description</label>
                              <textarea class="form-control" rows="4" name="description"></textarea>
                              <?php if ($this->session->flashdata('validation_error_description')) :  ?>
                                 <span class="text-danger"><?= $this->session->flashdata('validation_error_description') ?></span>
                              <?php endif ; ?>
                           </div>

                           <div class="form-group">
                              <label class="control-label">Tags</label>
                              <input class="form-control" type="text" data-role="tagsinput" name="tags">
                              <?php if ($this->session->flashdata('validation_error_tags')) :  ?>
                                 <span class="text-danger"><?= $this->session->flashdata('validation_error_tags') ?></span>
                              <?php endif ; ?>
                           </div>

                           <div class="form-group">
                              <label class="control-label">Image</label>
                              <input class="form-control" name="blog_image" type="file">
                              <?php if ($this->session->flashdata('validation_error_image')) :  ?>
                                 <span class="text-danger"><?= $this->session->flashdata('validation_error_image') ?></span>
                              <?php endif ; ?>
                           </div>

                           <button class="btn btn-primary btn-lg" type="submit">Submit Blog</button>
                        <?= form_close(); ?>
                    </div>
                 </div>
               </div>
            </div>
         </div>
      </main>
      <?php $this->load->view('admin/common/js') ?>
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
      <script type="text/javascript">
         tinymce.init({
            selector: 'textarea',
            height: 300,
            menubar: false,
            plugins: [
               'advlist autolink lists link image charmap print preview anchor textcolor',
               'searchreplace visualblocks code fullscreen',
               'insertdatetime media table contextmenu paste code help wordcount'
            ],
            toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: [
               '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
               '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
   </body>
</html>
