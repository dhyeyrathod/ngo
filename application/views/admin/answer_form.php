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
         <?php if ($this->session->flashdata('error')) :  ?>
            <div class="alert alert-danger">
               <strong><center><?= $this->session->flashdata('error') ?></center></strong>
            </div>
         <?php endif ; ?>
         <div class="row">
            <div class="col-md-12">
               <div class="tile">
                 <div class="row">
                    <div class="col-md-8">
                        <?= form_open('admin/question/answer_process') ?>
                           <fieldset class="form-group">
                              <legend><?= $question_key->question ?></legend>
                           </fieldset>
                           <div class="form-group">
                              <textarea class="form-control" name="answer_text" id="exampleTextarea" rows="5"></textarea>
                              <?php if ($this->session->flashdata('validation_error_answer')) : ?>
                                 <p class="text-danger"><?= $this->session->flashdata('validation_error_answer') ?></p>
                              <?php endif ; ?>
                              <input type="hidden" name="question_id" value="<?= $question_key->id ?>">
                              <input type="hidden" name="admin_id" value="<?= $this->session->userdata('admin_id'); ?>">
                           </div>
                           <button class="btn btn-primary btn-lg" type="submit">Submit Answer</button>
                        <?= form_close(); ?>
                    </div>
                 </div>
               </div>
            </div>
         </div>
      </main>
      <?php $this->load->view('admin/common/js') ?>
      <script type="text/javascript" src="<?= base_url('assets/admin') ?>/js/plugins/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="<?= base_url('assets/admin') ?>/js/plugins/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript">$('#sampleTable').DataTable();</script>
   </body>
</html>