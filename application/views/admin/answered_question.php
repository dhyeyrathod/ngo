<?php 
// echo "<pre>";
// print_r($question);
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
         <?php if ($this->session->flashdata('success')) :  ?>
            <div class="alert alert-success">
               <strong><center><?= $this->session->flashdata('success') ?></center></strong>
            </div>
         <?php endif ; ?>
         <div class="row">
            <div class="col-md-12">
               <div class="tile">
                  <div class="tile-body">
                     <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                           <tr>
                              <th>Queston Id</th>
                              <th>Question</th>
                              <th>Category</th>
                              <th>Status</th>                            
                              <th>Action</th>  
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($question as $key => $question_data) : ?>
                           <tr>
                              <td><?= $question_data->id ?></td>
                              <td><?= $question_data->question ?> </td>
                              <td><?= $question_data->category ?></td>
                              <td>
                                 <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label onclick="staus_active(<?= $question_data->id ?>)" class="btn btn-primary <?php if($question_data->display_status) : echo "active";endif; ?>" >
                                       <input id="status_active"  type="radio" name="options" checked=""> Active
                                    </label>
                                    <label onclick="status_deactive(<?= $question_data->id ?>)" class="btn btn-primary <?php if(!$question_data->display_status) : echo "active";endif; ?>">
                                       <input id="status_deactive" type="radio" name="options"> Deactive
                                    </label>
                                 </div>
                              </td>
                              <td>
                                 <a href="<?= base_url('admin/question/answer') ?>/<?= $question_data->id ?>"><button class="btn btn-primary" type="button">Answer</button></a>

                                 <a href="<?= base_url('admin/question/delete_question') ?>/<?= $question_data->id ?>"><button class="btn btn-danger" type="button">Delete</button></a>
                                 
                              </td>
                           </tr>
                        <?php endforeach ; ?>
                        </tbody>
                     </table>
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