<div class="page-content">
    <div class="search collapse in" id="search-collapse">
        <div class="container">
            <form class="main-search" role="form" method="post" action="#">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="type">Property Type </label>
                            <select name="type" multiple="" title="All" id="type" class="animate" data-transition-parent=".dropdown-menu">
                                <option value="1"> Apartment </option>
                                <option value="2"> Condominium </option>
                                <option value="3"> Cottage </option>
                                <option value="4"> Flat </option>
                                <option value="5"> House </option>
                                <option value="6"> Construction Site </option>
                            </select>
                        </div>
                        <!-- /.form-group --> 
                    </div>
                    <!--/.col-md-6-->
                    <div class="col-md-3 col-sm-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="bedrooms">Bedrooms </label>
                                    <div class="input-group counter">
                                        <input type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="Any" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-default minus" type="button"><i class="fa fa-minus"></i></button>
                                        </span> <span class="input-group-btn">
                                            <button class="btn btn-default plus" type="button"><i class="fa fa-plus"></i></button>
                                        </span> </div>
                                    <!-- /input-group --> 
                                </div>
                                <!-- /.form-group --> 
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="bathrooms">Bathrooms </label>
                                    <div class="input-group counter">
                                        <input type="text" class="form-control" id="bathrooms" name="bathrooms" placeholder="Any" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-default minus" type="button"><i class="fa fa-minus"></i></button>
                                        </span> <span class="input-group-btn">
                                            <button class="btn btn-default plus" type="button"><i class="fa fa-plus"></i></button>
                                        </span> </div>
                                    <!-- /input-group --> 
                                </div>
                                <!-- /.form-group --> 
                            </div>
                            <!--/.col-md-3--> 
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="location">Location </label>
                            <div class="input-group location">
                                <input type="text" class="form-control" id="location" placeholder="Enter Location" />
                                <span class="input-group-btn">
                                    <button class="btn btn-default animate" type="button"><i class="fa fa-map-marker geolocation" data-toggle="tooltip" data-placement="bottom" title="Find my position"></i></button>
                                </span> </div>
                        </div>
                        <!-- /.form-group --> 
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label>Price </label>
                            <div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before">
                                <div class="values clearfix">
                                    <input class="value-min" name="value-min[]" readonly />
                                    <input class="value-max" name="value-max[]" readonly />
                                </div>
                                <div class="element"></div>
                            </div>
                        </div>
                        <!-- /.form-group --> 
                    </div>
                    <!--/.col-md-6--> 
                </div>
                <!--/.row-->
            </form>
            <!-- /.main-search --> 
        </div>
        <!--end .container--> 
    </div>
    <!--end .search-->

    <!--end .map-wrapper-->
    <div class="middle-container">

        <div class="item-details-wrap">
            <div class="container">
                <div id="tabs-wrap">
                    <ul id="tabs">
                        <li data-id="tab1" class="active">Details</li>
                        <li data-id="tab2">Tab1</li>
                        <li data-id="tab3">Tab2</li>
                        <li data-id="tab4">Tab3</li>

                    </ul>
                    <div class="tabs-content">
                        <div class="hide-content" id="tab1" style="display:block">
                            <div class="header-div">
                                <h2 class="title">Testing</h2>
                                <a href="index.html" class="back-button">Back</a>
                            </div>

                            <div class="details-images" >
                                <div class="col-lg-3 col-md-3 col-sm-3"><a class="fancybox" href="<?php echo base_url('assets/images/8.jpg'); ?>" data-fancybox-group="gallery" title="Lorem ipsum"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></a></div>
                                <div class="col-lg-3 col-md-3 col-sm-3"><a class="fancybox" href="<?php echo base_url('assets/images/8.jpg'); ?>" data-fancybox-group="gallery" title="Lorem ipsum"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></a></div>
                                <div class="col-lg-3 col-md-3 col-sm-3"><a class="fancybox" href="<?php echo base_url('assets/images/8.jpg'); ?>" data-fancybox-group="gallery" title="Lorem ipsum"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></a></div>
                                <div class="col-lg-3 col-md-3 col-sm-3"><a class="fancybox" href="<?php echo base_url('assets/images/8.jpg'); ?>" data-fancybox-group="gallery" title="Lorem ipsum"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></a></div>


                            </div>
                            <div class="tumanail_image">
                                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg'); ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                            </div> 

                            <div class="about-des div_sec">
                                <h3>About</h3>
                                <div class="about-cnt">
                                    <p>must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely </p>
                                </div>

                            </div>
                            <div class="video-sec div_sec">
                                <h3>Video</h3>
                                <div class="inner-cnt">
                                    <iframe width="570" height="330" src="https://www.youtube.com/embed/sysxAsvqMwk" frameborder="0" allowfullscreen></iframe>
                                </div>

                            </div>

                            <div class="other-des div_sec">
                                <h3>About</h3>
                                <div class="inner-cnt">
                                    <p>must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely </p>
                                </div>


                            </div>
                            <a href="index.html" class="back-button bottom">Back</a>


                        </div>
                        <div class="hide-content" id="tab2">
                            <p>Comming Soon2</p>

                        </div>
                        <div class="hide-content" id="tab3">
                            <p>Comming Soon3</p>

                        </div>
                        <div class="hide-content" id="tab4">
                            <p>Comming Soon4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#tabs-wrap #tabs li").click(function() {
            var id = jQuery(this).attr('data-id');
            $(".tabs-content div.hide-content").hide();
            $("#" + id).show();
            $("#tabs-wrap #tabs li").removeClass('active');
            $(this).addClass('active');
        });
    })
</script>