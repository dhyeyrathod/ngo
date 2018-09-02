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
                            <h1>Join Us</h1>
                        </div>
                        <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                            <ul class="bread-crumb clearfix">
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li class="active">Join Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            
            <section class="donate-now">
                <div class="auto-container">
                    <div class="default-form">
                        <?= form_open('joinus_process') ?>
                            <div class="row clearfix"> 
                                <!--Right Column-->
                                <div class="left-column col-md-6 col-sm-12 col-xs-12">
                                    <div class="default-title"><h3>Join Mava</h3></div>
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Name *</div>
                                            <input type="text" value="<?= set_value('name') ?>" name="name" required="">
                                            <div class="text-danger"><?= form_error('name') ? form_error('name') : "" ?></div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone *</div>
                                            <input type="text" value="<?= set_value('phone') ?>" name="phone" required="">
                                            <div class="text-danger"><?= form_error('phone') ? form_error('phone') : "" ?></div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Country *</div>
                                            <select value="<?= set_value('country_select') ?>" class="custom-select-box" name = "country_select" id="country_select">
                                                <option value="">--- Select Country ---</option>
                                                <?php foreach ($all_country_key as $key => $all_country_data) : ?>
                                                <option value="<?= $all_country_data->country_id ?>"><?= $all_country_data->country_name ?></option>
                                                <?php endforeach ; ?>
                                            </select>
                                            <div class="text-danger"><?= form_error('country_select') ? form_error('country_select') : "" ?></div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">City *</div>
                                            <select name="city" class="custom-select-box" id="city_select">
                                                <option>--- Select City ---</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Email *</div>
                                            <input type="text" value="<?= set_value('email') ?>" name="email" required="">
                                            <div class="text-danger"><?= form_error('email') ? form_error('email') : "" ?></div>
                                        </div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Comments</div>
                                            <textarea name="comments" placeholder=""><?= set_value('comments') ?></textarea>
                                            <div class="text-danger"><?= form_error('comments') ? form_error('comments') : "" ?></div>
                                        </div>
                                        
                                    </div>
                                </div>     
                                <!--Left Column-->
                                <div class="right-column col-md-6 col-sm-12 col-xs-12">
                                    <div class="default-title"><h3>Would you like to volunteer for any activities / programs of MAVA? If yes, please tick the ones given below, for which you can spare time & skills:</h3></div>
                                    <div class="row clearfix">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input value="Provide counselling & guidance to men and women contacting MAVA" name="option[]" type="checkbox">
                                                </span>
                                                <input type="text" value="Provide counselling & guidance to men and women contacting MAVA" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Raising awareness on gender issues" type="checkbox">
                                                </span>
                                                <input type="text" value="Raising awareness on gender issues" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Organizing Workshops for youths on gender and sexuality matters" type="checkbox">
                                                </span>
                                                <input type="text" value="Organizing Workshops for youths on gender and sexuality matters" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Volunteering at the Helpline" type="checkbox">
                                                </span>
                                                <input type="text" value="Volunteering at the Helpline" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Office-Administration" type="checkbox">
                                                </span>
                                                <input type="text" value="Office-Administration" class="form-control">
                                            </div>
                                        </div>  
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Raising funds for the organization" type="checkbox">
                                                </span>
                                                <input type="text" value="Raising funds for the organization" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Soliciting new members" type="checkbox">
                                                </span>
                                                <input type="text" value="Soliciting new members" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Organising events" type="checkbox">
                                                </span>
                                                <input type="text" value="Organising events" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon beautiful">
                                                    <input name="option[]" value="Liasoning and networking with women’s groups & other organizations" type="checkbox">
                                                </span>
                                                <input type="text" value="Liasoning and networking with women’s groups & other organizations" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                                   <button type="submit" class="theme-btn btn-style-one">Submit Donation</button>
                                </div>
                            </div>
                        <?= form_close() ?>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $("#country_select").change(function(){
                var country_id = $("#country_select").val();
                var ajex_get_city = base_url + "/get_city";
                $.ajax({
                    type: "POST",
                    url: ajex_get_city,
                    data: {country_id:country_id},
                    success: function(response){
                        if (response.length > 0) {
                            $("#city_select").html('');
                            var html_str = '<option>---Select City---</option>';
                            for(var i = 0 ; i < response.length ; i++)
                            {
                                html_str += '<option value="'+response[i].city_id+'">'+response[i].city_name+'</option>';
                            }
                            $("#city_select").html(html_str);
                            $('#city_select').prop('disabled', false);
                        } else {
                            alert("city is not present");
                        }
                    },
                    error : function (response) {

                    }
                });
            });
            $( document ).ready(function() {
                var success = "<?= $this->session->flashdata('success') ?>" ;
                if (success) {
                    swal("Done", success , "success");                    
                }
            });
        </script>
    </body>
</html>