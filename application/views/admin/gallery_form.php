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
                        <?= form_open_multipart('admin/gallery/image_process') ?>
                           <div class="form-group">
			                    	<label for="exampleSelect1">Select category</label>
			                    	<select name="category" class="form-control">
			                    		<option value="">---Select category---</option>
			                    		<?php foreach ($category_key as $key => $category_data) : ?>
			                      		<option value="<?= $category_data->id ?>"><?= $category_data->category_name ?></option>
			                      	<?php endforeach ; ?>
			                    	</select>
                              <div class="text-danger"><?= $this->session->flashdata('category_error') ? $this->session->flashdata('category_error') : "" ?></div>
			                  </div>

			                  <div class="form-group">
			                    	<label for="exampleInputFile">Select image</label>
			                    	<input class="form-control-file" name="exampleInputFile" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                              <div class="text-danger"><?= $this->session->flashdata('image_error') ? $this->session->flashdata('image_error') : "" ?></div>
			                  </div>
                           <button class="btn btn-primary btn-lg" type="submit">Submit Image</button>
                        <?= form_close(); ?>
                    </div>
                 </div>
               </div>
            </div>
         </div>
      </main>
      <?php $this->load->view('admin/common/js') ?>
   </body>
</html>
