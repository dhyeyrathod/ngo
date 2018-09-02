<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CharityPoint HTML Template | About</title>
        <?php $this->load->view('frontend/common/css') ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    </head>
    <body>
        <div class="page-wrapper">
            <?php $this->load->view('frontend/common/header') ?>
            <section class="page-title" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/banner-4.jpg);">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-md-6 col-sm-8 col-xs-12">
                            <h1>donate</h1>
                        </div>
                        <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                            <ul class="bread-crumb clearfix">
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li class="active">donate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="point-section">
		    	<div class="auto-container">
		        	<div class="inner-container">
		                <div class="sec-title">
		                    <h2>Donate</h2>
		                </div>
		                <div class="text">
		                    <p>MAVA seeks your valuable support by way of a voluntary donation towards any of its Projects and help advance its mission. </p>
		                    <p>All Indian donations to MAVA are exempt from payment of Income-Tax under Sec.80 G of the I-T Act. </p>
		                    <p>All foreign donations to MAVA by individuals and organizations are officially allowed by the Government of India. The FCRA Registration No. is 083781378</p>
		                    <p>We seek contributions from you for any of the following : </p>
		                </div>
		                <div class="row clearfix">
		                    <div class="column col-md-12 col-sm-12 col-xs-12">
		                        <ul class="list-style-one">
		                            <li>One Day Gender-Sensitization Workshop in a College / School / Community-based Organization for 50 youth participants @ 60 USD per Workshop</li>
		                            <li>Six-Day Residential Training Workshop of 30 Youth Leaders on Gender and Sexuality in a city / district @ 1000 USD per Workshop (includes Stay, Food and Travel of Participants, Honorarium and Travel of Resource-Persons Conducting the Workshop, Resource Material, Hiring of Hall and Equipment)</li>
		                            <li>Honorarium and Travel Allowance to 10 Trained Volunteers manning Youth Helpline @170 USD per month</li>
		                            <li>Organizing Street-Play Performances on Gender Theme at various locations across Mumbai @ 50 USD per show</li>
		                            <li>3–Day Film Festival on Gender and Relationships for college youths @ 150 USD per festival</li>
		                            <li>Advocacy Campaign comprising Public Rally, Symposia / Cultural Event reaching out to 2000 adolescent boys and young men @ 200 USD per Campaign</li>
		                        </ul>
		                    </div>
		                    <!-- <div class="column col-md-6 col-sm-6 col-xs-12">
		                        <ul class="list-style-one">
		                            <li>Core values are the fundamental beliefs.</li>
		                            <li>Charity are professionals in the charity. </li>
		                            <li>Our mission is to provide the great result for clients on time.</li>
		                        </ul>
		                    </div> -->
		                </div>
		                <p>Kindly remit USD to <b> Citi Bank, New York (Swift Code: CITIUS33) </b> for further credit to <b> IDBI Bank Ltd.A/c No. 3615-1898 </b> quoting Men Against Violence and Abuse <b> SB Account No.026104000073477 </b> with IDBI Bank Limited (Corporate Branch) MUMBAI IN <b> (SWIFT : IBKLINBB126 ) </b></p>
		                <p>Please send details by email to Harish Sadani, Honorary Secretary at <a href="mailto:saharsh267@gmail.com"> saharsh267@gmail.com </a> upon making a donation.Your contribution, of any amount, will make a huge difference to the lives of many… We look forward to your support.</p>
		            </div>
		        </div>
		    </section>


            <section class="clients-section" style="background-image:url(<?= base_url('assets/frontend') ?>/images/background/1.jpg)">
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
    </body>
</html>