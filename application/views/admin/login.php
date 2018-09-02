<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php $this->load->view('admin/common/css') ?>
      <title>Login - Vali Admin</title>
   </head>
   <body>
      <section class="material-half-bg">
         <div class="cover"></div>
      </section>
      <section class="login-content">
         <div class="logo">
            <h1>Vali</h1>
         </div>
         <div class="login-box">
            <?= form_open('admin/account/action_login', array('class' => 'login-form')); ?>
               <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
               <?php if ($this->session->flashdata('login_faild')) :  ?>
	               <div class="alert alert-danger">
		               <strong><center><?= $this->session->flashdata('login_faild') ?></center></strong>
		            </div>
	         	<?php endif ; ?>
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="text" name="email" placeholder="Email" autofocus>
                  <?php if ($this->session->flashdata('email_error')) :  ?>
	                  <span class="text-danger"><?= $this->session->flashdata('email_error') ; ?></span>
                  <?php endif ; ?>
               </div>
               <div class="form-group">
                  <label class="control-label">PASSWORD</label>
                  <input class="form-control" type="password" name="password" placeholder="Password">
                  <?php if ($this->session->flashdata('password_error')) :  ?>
	                  <span class="text-danger"><?= $this->session->flashdata('password_error') ; ?></span>
	               <?php endif ; ?>
               </div>
               <div class="form-group btn-container">
                  <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
               </div>
            <?= form_close() ; ?>
         </div>
      </section>
      <?php $this->load->view('admin/common/js') ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
      	$( document ).ready(function() {
			  	var login_erro = "<?= $this->session->flashdata('login_faild') ?>" ;
			  	if (login_erro) {
			  		swal("Oops", login_erro , "error");
			  		$(".login-head").html("");
			  		$(".login-head").css({"border-bottom": 0});
			  		$(".login-head").css({"margin-bottom": 0});
			  		$(".login-head").css({"padding-bottom": 0});
			  	}
			});
      </script>
   </body>
</html>