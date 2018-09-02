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
         <?php if ($this->session->flashdata('error')) :  ?>
            <div class="alert alert-danger">
               <strong><center><?= $this->session->flashdata('error') ?></center></strong>
            </div>
         <?php endif ; ?>
         <div class="row">
            <div class="col-md-12">
               <div class="tile">
                  <div class="tile-body">
                     <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                           <tr>
                              <th>Image Id</th>
                              <th>image</th>
                              <th>category</th>
                              <th>Delete</th>                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($gallery_key as $gallery_data) : ?>
                              <tr>
                                 <td><?= $gallery_data->id ?></td>
                                 <td><img style="width: 150px;height: 70px;" src="<?= base_url('assets/gallery_image') ?>/<?= $gallery_data->image_name ?>"></td>
                                 <td><?= $gallery_data->category_name ?></td>
                                 <td><a class="btn btn-danger" href="<?= base_url('admin/gallery/delete_image') ?>/<?= $gallery_data->id ?>">Delete</a></td>
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