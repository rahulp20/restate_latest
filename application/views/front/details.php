<div class="page-content">
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