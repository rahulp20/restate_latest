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

    <div class="map-wrapper grid"> <img src="<?php echo base_url('assets/images/map.jpg') ?>" alt="" /> </div>
    <!--end .map-wrapper-->
    <div class="middle-container">
        <div class="item-slider">

            <ul id="owl-demo" class="owl-carousel">
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>
                <li class="div-item"><a href="#">
                        <div class="inner">
                            <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                            <div class="item-content">
                                <header class="">
                                    <h2>942 Hillview Drive </h2>
                                    <h3>Plymouth </h3>
                                </header>
                                <footer>
                                    <dl>
                                        <dt>Bathrooms </dt>
                                        <dd>1 </dd>
                                        <dt>Bedrooms </dt>
                                        <dd>2 </dd>
                                        <dt>Area </dt>
                                        <dd>165m <sup>2 </sup></dd>
                                        <dt>Garages </dt>
                                        <dd>1 </dd>
                                    </dl>
                                </footer>
                            </div>
                        </div>
                    </a></li>



            </ul>
        </div>
    </div>
    <div class="container">
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
        <div class="singal-item-wrap wow fadeInUp" data-wow-delay="200ms">
            <div class="inner">
                <div class="col-lg-4">
                    <div class="image"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></div>
                </div>
                <div class="col-lg-8">
                    <div class="item-content">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was  No one rejects. complete account the great.Explorer of the truth, the master-builder Must explain to you idea of  No one rejects. denouncing pleasure and praising pain was complete account the great. of human happiness. No one rejects.</p>
                    </div>
                </div>
            </div>
            <div class="tumanail-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
            <div class="bottom-image">
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
                <div class="col-lg-4"> <span class="img"><img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /></span> <span class="img-cnt">Must explain to you how all this mistaken</span> </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.bxslider.js') ?>"></script>