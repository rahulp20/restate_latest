<?php // echo "<pre>";print_R($featured_data);exit;        ?>
 <style type="text/css">
  html { height: 100% }
  body { height: 455px; width:100%;  margin: 0; padding: 0 }
  #map_canvas { height: 100% }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false
&libraries=places"></script>
<script type="text/javascript">

var locations = [
  ['loan 1', 52.511467, 13.447179, 'address 1'],
  ['loan 2', 52.549061, 13.422975, 'address 2'],
  ['loan 3', 52.497622, 13.396110, 'address 3'],
  ['loan 4', 52.517683, 13.394393, 'address 4'],
  ['loan 5', 52.517688, 13.394395, 'address 5']
  ];
  
  var mapStyles = [{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}];

  function initialize() {

    var myOptions = {
      center: new google.maps.LatLng(33.890542, 151.274856),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };
    var map = new google.maps.Map(document.getElementById("default"),
        myOptions);
        map.setOptions({
            zoom: 12,
          //  center: mapCenter,
            disableDefaultUI: false,
            styles: mapStyles,
            panControl: true,
            zoomControl: true,
            draggable: true,
            flat:true
        });
    setMarkers(map,locations)

  }



  function setMarkers(map,locations){

      var marker, i

for (i = 0; i < locations.length; i++)
 {  

 var loan = locations[i][0]
 var lat = locations[i][1]
 var long = locations[i][2]
 var add =  locations[i][3]

 latlngset = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({  
          map: map, title: loan , position: latlngset,icon: 'assets/images/marker.png'  
        });
        map.setCenter(marker.getPosition())


        var content = "Loan Number: " + loan +  '</h3>' + "Address: " + add     

  var infowindow = new google.maps.InfoWindow()
 
google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
        };
    })(marker,content,infowindow)); 

  }
  }
 



  </script>
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

   <div class="map-wrapper grid" id="default" style="width:100%; height:455px"></div>
    <!--end .map-wrapper-->

    <div class="middle-container">
        <div class="item-slider">

            <ul id="owl-demo" class="owl-carousel">
                <?php
                //cho "<pre>";print_r($featured_data);
                foreach ($featured_data as $featured_item) {
                    ?>
                    <li class="div-item"><a href="#">
                            <div class="inner">
                                <div class="image"> <img src="<?php echo base_url('assets/images/8.jpg') ?>" alt="" /> </div>
                                <div class="item-content">
                                    <header class="">
                                        <h2><?php echo $featured_item->title; ?></h2>
                                        <h3><?php echo $featured_item->property_type; ?> </h3>
                                    </header>
                                    <footer>
                                        <dl>
                                            <dt>Bathrooms </dt>
                                            <dd><?php echo $featured_item->bathroom; ?> </dd>
                                            <dt>Bedrooms </dt>
                                            <dd><?php echo $featured_item->bedroom; ?> </dd>
                                            <dt>Area </dt>
                                            <dd><?php echo $featured_item->area; ?>m<sup>2 </sup></dd>
                                            <dt>Garages </dt>
                                            <dd><?php echo $featured_item->garages; ?> </dd>
                                        </dl>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php } ?>
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