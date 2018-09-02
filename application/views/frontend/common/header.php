
<header class="main-header header-style-two">
	<div class="header-top-two">
    	<div class="auto-container">
        	<div class="clearfix">
                <div class="top-left">
                    <div class="social-icon">
                    	<ul class="clearfix">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fa fa-behance"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="top-right clearfix">
                    <div class="search-box">
                    	<form method="post" action="http://effortthemes.com/html/charitypoint/contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search...." required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
					</div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="header-upper">
    	<div class="auto-container">
        	<div class="clearfix">	
            	<div class="pull-left logo-outer">
                	<div class="logo"><a href="<?= base_url() ?>"><img src="http://www.mavaindia.org/images/mava-logo.gif" style="width: 250;height: 70px;" alt="" title=""></a></div>
                </div>
                <div class="pull-right upper-right clearfix">
                    <div class="upper-column info-box">
                    	<ul>
                        	<li><span class="icon flaticon-technology-1"></span><strong>Phone.</strong></li>
                            <li>(1) 111-123-458</li>
                        </ul>
                    </div>
                    <div class="upper-column info-box">
                    	<ul>
                        	<li><span class="icon flaticon-symbol"></span><strong>Email</strong></li>
                            <li>mail@example.com</li>
                        </ul>
                    </div>
                    <div class="upper-column info-box">
                    	<ul>
                        	<li><span class="icon flaticon-location-pin"></span><strong>Location</strong></li>
                            <li>Tottenam Road, NewYark.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
    	<div class="auto-container">
        	<div class="nav-outer clearfix">
                <nav class="main-menu">
                    <div class="navbar-header">    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?= base_url('about_us') ?>">About Us</a></li>
                            <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                            <li><a href="<?= base_url('gallery') ?>">Gallery</a></li>
                            <li><a href="<?= base_url('donate') ?>">donate</a></li>
                            <li><a href="<?= base_url('media') ?>">Media</a></li>
                            <li><a href="<?= base_url('programs') ?>">Programmes</a></li>
                            <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="outer-box">
                    <a href="<?= base_url('ask_question') ?>" class="theme-btn btn-style-two">Ask Question</a>
                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <a href="<?= base_url('logout') ?>" class="theme-btn btn-style-one">logout</a>
                    <?php else  : ?>
                        <a href="<?= base_url('authentication') ?>" class="theme-btn btn-style-one">login</a>
                    <?php endif ;  ?>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <div class="logo pull-left">
                <a href="<?= base_url() ?>" class="img-responsive" title="Tali"><img src="http://www.mavaindia.org/images/mava-logo.gif" style="width: 250;height: 40px;"></a>
            </div>
            <div class="right-col pull-right">
                <nav class="main-menu">
                    <div class="navbar-header">   	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>  
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?= base_url('about_us') ?>">About Us</a></li>
                            <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                            <li><a href="<?= base_url('gallery') ?>">Gallery</a></li>
                            <li><a href="<?= base_url('donate') ?>">donate</a></li>
                            <li><a href="<?= base_url('media') ?>">Media</a></li>
                            <li><a href="<?= base_url('programs') ?>">Programmes</a></li>
                            <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
