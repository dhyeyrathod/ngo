<header class="main-header">
	<div class="main-box">
    	<div class="auto-container">
        	<div class="outer-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="<?= base_url() ?>"><img src="http://www.mavaindia.org/images/mava-logo.gif" style="width: 250;height: 40px;"></a></div>
                </div>
                <div class="btn-outer outer-box">
                    <a href="<?= base_url('ask_question') ?>" class="theme-btn btn-style-two">Ask Question</a>
                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <a href="<?= base_url('logout') ?>" class="theme-btn btn-style-one">logout</a>
                    <?php else  : ?>
                        <a href="<?= base_url('authentication') ?>" class="theme-btn btn-style-one">login</a>
                    <?php endif ;  ?>
                </div>
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
                                <!-- <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage One</a></li>
                                        <li><a href="index-2.html">Homepage Two</a></li>
                                        <li><a href="index-3.html">Homepage Three</a></li>
                                        <li class="dropdown"><a href="#">Headers Style</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li class="dropdown"><a href="#">Volunteer</a>
                                            <ul>
                                                <li><a href="volunter.html">Volunteer</a></li>
                                                <li><a href="volunter-single.html">Volunteer Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Causes</a>
                                    <ul>
                                        <li><a href="causes-grid.html">Causes Grid View</a></li>
                                        <li><a href="causes-list.html">Causes List View</a></li>
                                        <li><a href="causes-single.html">Causes Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Event</a>
                                    <ul>
                                        <li><a href="events-grid.html">Event Grid View</a></li>
                                        <li><a href="events-list.html">Event List View</a></li>
                                        <li><a href="events-single.html">Event Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.html">Gallery Masonry</a></li>
                                        <li><a href="gallery-threecolumn.html">Gallery Three Column</a></li>
                                        <li><a href="gallery-fullwidth.html">Gallery FullWidth</a></li>
                                        <li><a href="gallery-single.html">Gallery Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-default.html">Blog Default</a></li>
										<li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-sibebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->
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
                    <!-- <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="http://effortthemes.com/html/charitypoint/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
        	</div>    
        </div>
    </div>
</header>