<aside class="app-sidebar">
   <div class="app-sidebar__user">
      <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
      <div>
         <p class="app-sidebar__user-name"><?= $this->session->userdata('admin_name'); ?></p>
      </div>
   </div>
   <ul class="app-menu">
      <li><a class="app-menu__item" href="<?= base_url('admin/dashboard/index') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview">
         <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Question</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('Admin/question/list_question') ?>"><i class="icon fa fa-circle-o"></i> New Question </a></li>
            <li><a class="treeview-item" href="<?= base_url('Admin/question/answerd_question') ?>"><i class="icon fa fa-circle-o"></i> Answered Questions </a></li>
         </ul>
      </li>
      <li class="treeview">
         <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Blog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('Admin/blog/add_blog') ?>"><i class="icon fa fa-circle-o"></i> Add New Blog </a></li>
         </ul>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('Admin/blog/blog_list') ?>"><i class="icon fa fa-circle-o"></i> Blog List </a></li>
         </ul>
      </li>
      <li class="treeview">
         <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('Admin/gallery/index') ?>"><i class="icon fa fa-circle-o"></i> Add New Image </a></li>
         </ul>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url('Admin/gallery/image_list') ?>"><i class="icon fa fa-circle-o"></i> Image List </a></li>
         </ul>
      </li>
   </ul>
</aside>
