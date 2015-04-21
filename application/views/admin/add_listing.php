<?php
$this->load->view('templates/leftpanel.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <ol class="breadcrumb bc-2">
        <li><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
        <li><a href="<?php echo base_url('admin/listing'); ?>">Listing</a></li>
        <li class="active"><?php echo $action ?> Listing</li>
    </ol>    
    <?php if (isset($system_message)) echo $system_message; ?>
    <form class="form-wizard" id="add_listing_form" novalidate="novalidate" role="form" method="POST" action="<?php echo base_url('admin/add_listing_details') ?>" enctype="multipart/form-data">
        <input name="listing_id" value="<?php echo (isset($listing_data->id) && !empty($listing_data->id)) ? $listing_data->id : ''; ?>" type="hidden"> 
        <div class="panel-body col-md-12">
            <div class="panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="button-action pull-right" style="margin-top: -5px;
                         ">
                        <input id="save_guest" class="btn btn-danger " name="save_contact" value="Save" type="submit">
                        <a href="<?php echo base_url('admin/listing') ?>"><input id="cancel" class="btn btn-danger " data-enable-readonly="true" value="Cancel" type="button"></a>
                    </div>
                    <div class="panel-title">
                        Property Basic Information
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title" class="col-sm-5 control-label">Property Title</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="title" name="title" placeholder="Property Title" value="<?php echo (isset($listing_data->title) && !empty($listing_data->title)) ? $listing_data->title : ''; ?>" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description" class="col-sm-5 control-label">Property Description</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="description" name="description" placeholder="Property Description" value="<?php echo (isset($listing_data->description) && !empty($listing_data->description)) ? $listing_data->description : ''; ?>" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 required ">
                        <label for="price" class="col-sm-5 control-label">Property Price</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="price" name="price" placeholder="Property Price" value="<?php echo (isset($listing_data->price) && !empty($listing_data->price)) ? $listing_data->price : ''; ?>" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6 required ">
                        <label for="is_featured" class="col-sm-5 control-label">Is featured Property?</label>
                        <div class="col-sm-6">
                            <select class="form-control disabled required" name="is_featured" id="is_featured">
                                <option value="" > --Select Type--</option>
                                <option value="1" <?php echo (isset($listing_data->is_featured) && $listing_data->is_featured == 1) ? "selected" : "" ?>>Yes</option>
                                <option value="0" <?php echo (isset($listing_data->is_featured) && $listing_data->is_featured == 0) ? "selected" : "" ?>>No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="panel-title">
                        Property Address
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group col-md-12 required">
                                <label for="country" class="col-sm-5 control-label ">Country</label>
                                <div class="col-sm-6" id="country"> 
                                    <?php
                                    $country_id = (isset($listing_data->country_id)) ? $listing_data->country_id : 0;
                                    echo $this->drop_down->get_active_condition_drop_down($country_id, 'country', 'countries', 'country_name', 'id');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 required" >
                                <label for="state" class="col-sm-5 control-label ">State</label>
                                <div class="col-sm-6" id="corr_state"> 
                                    <?php
                                    $state_id = (isset($listing_data->state_id)) ? $listing_data->state_id : 0;
                                    $get_state = (isset($listing_data->country_id)) ? $listing_data->country_id : 0;
                                    echo $this->drop_down->get_active_condition_drop_down_state($state_id, 'states', 'id', 'state_name', 'state', array('country_id' => $get_state));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 required">
                                <label for="city" class="col-sm-5 control-label ">City</label>
                                <div class="col-sm-6" id="city"> 
                                    <?php
                                    $city_id = (isset($listing_data->city_id)) ? $listing_data->city_id : 0;
                                    $state_corre_name = (isset($corre_state_name[0]->state_name)) ? $corre_state_name[0]->state_name : "";
                                    echo $this->drop_down->get_active_condition_drop_down_city($city_id, 'city', 'id', 'Name', 'corre_city', array('District' => $state_corre_name));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group col-md-12 required">
                                <label for="additional_address" class="col-sm-5 control-label ">Additional Address Info</label>
                                <div class="col-sm-6"> 
                                    <textarea style="resize: none;" name="additional_address" rows="7" class="form-control disabled"><?php echo (isset($listing_data->address) && !empty($listing_data->address)) ? $listing_data->address : ''; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="panel-title">
                        Property Overview
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6 required ">
                        <label for="type" class="col-sm-5 control-label">Property Type</label>
                        <div class="col-sm-6">
                            <select class="form-control disabled required" name="type" id="type" >
                                <option value="" > --Select Type--</option>
                                <option value="apartment" <?php echo (isset($listing_data->property_type) && $listing_data->property_type == 'apartment') ? "selected" : "" ?>>Apartment</option>
                                <option value="condominium" <?php echo (isset($listing_data->property_type) && $listing_data->property_type == 'condominium') ? "selected" : "" ?>>Condominium</option>
                                <option value="cottage" <?php echo (isset($listing_data->property_type) && $listing_data->property_type == 'cottage') ? "selected" : "" ?>>Cottage</option>
                                <option value="flat" <?php echo (isset($listing_data->property_type) && $listing_data->property_type == 'flat') ? "selected" : "" ?>>Flat</option>
                                <option value="house" <?php echo (isset($listing_data->property_type) && $listing_data->property_type == 'house') ? "selected" : "" ?>>House</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 required ">
                        <label for="type" class="col-sm-5 control-label">Status</label>
                        <div class="col-sm-6">
                            <select class="form-control disabled required" name="property_status" id="property_status">
                                <option value="" > --Select Status--</option>
                                <option value="sale" <?php echo (isset($listing_data->property_status) && $listing_data->property_status == 'sale') ? "selected" : "" ?>>Sale</option>
                                <option value="rent" <?php echo (isset($listing_data->property_status) && $listing_data->property_status == 'rent') ? "selected" : "" ?>>Rent</option>
                                <option value="in_hole" <?php echo (isset($listing_data->property_status) && $listing_data->property_status == 'in_hole') ? "selected" : "" ?>>In Hold</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="rooms" class="col-sm-5 control-label">No. of Rooms</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="rooms" name="rooms" placeholder="No. of Rooms" value="<?php echo (isset($listing_data->rooms) && !empty($listing_data->rooms)) ? $listing_data->rooms : ''; ?>" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="garages" class="col-sm-5 control-label">No. of Garages</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="garages" name="garages" placeholder="No. of Garages" value="<?php echo (isset($listing_data->garages) && !empty($listing_data->garages)) ? $listing_data->garages : ''; ?>" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="bedroom" class="col-sm-5 control-label">No. of Bedrooms</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="bedroom" name="bedroom" placeholder="No. of Bedrooms" value="<?php echo (isset($listing_data->bedroom) && !empty($listing_data->bedroom)) ? $listing_data->bedroom : ''; ?>" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bathroom" class="col-sm-5 control-label">No. of Bathrooms</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="bathroom" name="bathroom" placeholder="No. of Bathrooms" value="<?php echo (isset($listing_data->bathroom) && !empty($listing_data->bathroom)) ? $listing_data->bathroom : ''; ?>" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="area" class="col-sm-5 control-label">Area</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="area" name="area" placeholder="Area" value="<?php echo (isset($listing_data->area) && !empty($listing_data->area)) ? $listing_data->area : ''; ?>" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="build_year" class="col-sm-5 control-label">Build Year</label>
                        <div class="col-sm-6">
                            <input class="form-control disabled" id="build_year" name="build_year" placeholder="Build Year" value="<?php echo (isset($listing_data->build_year) && !empty($listing_data->build_year)) ? $listing_data->build_year : ''; ?>" type="text">
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="panel-title">
                        Property Features
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <br>
                            <ul class="input_listing">
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="free_parking" <?php echo (isset($listing_data->features) && in_array('free_parking', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Free Parking</label>
                                    </div>    
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="cards_accepted" <?php echo (isset($listing_data->features) && in_array('cards_accepted', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Cards Accepted</label> 
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="wifi" <?php echo (isset($listing_data->features) && in_array('wifi', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Wi-Fi</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="air_condition" <?php echo (isset($listing_data->features) && in_array('air_condition', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Air Condition</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="reservations" <?php echo (isset($listing_data->features) && in_array('reservations', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Reservations</label> 
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="team_buildings" <?php echo (isset($listing_data->features) && in_array('team_buildings', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Team-buildings</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="place_to_seat" <?php echo (isset($listing_data->features) && in_array('place_to_seat', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Places to seat</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="winery" <?php echo (isset($listing_data->features) && in_array('winery', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Winery</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="draft_beer" <?php echo (isset($listing_data->features) && in_array('draft_beer', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Draft Beer</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="lcd" <?php echo (isset($listing_data->features) && in_array('lcd', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>LCD</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="saloon" <?php echo (isset($listing_data->features) && in_array('saloon', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Saloon</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="free_access" <?php echo (isset($listing_data->features) && in_array('free_access', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Free Access</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="terrace" <?php echo (isset($listing_data->features) && in_array('terrace', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Terrace</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="minigolf" <?php echo (isset($listing_data->features) && in_array('minigolf', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Minigolf</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input_group">
                                        <input type="checkbox" name="features[]" value="night_bar" <?php echo (isset($listing_data->features) && in_array('night_bar', $listing_data->features)) ? "checked" : "" ?>>
                                    </div>
                                    <div class="input_label">
                                        <label>Night Bar</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    var load_locaion = '<?php echo base_url('admin/load_location') ?>';
    var load_location_city = '<?php echo base_url('admin/load_location_city') ?>';

    $(document).ready(function() {
        $validate_form = $("#add_listing_form").validate({
            errorClass: "text-danger",
            errorPlacement: function(error, element) {
                if (element.parent('.input_group').length)
                {
                    error.insertBefore(element.parent().parent().parent());
                } else
                {
                    error.insertAfter(element);
                }
            },
            rules: {
                title: {
                    required: true
                },
                description: {
                    required: true
                },
                price: {
                    required: true,
                    number: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                corre_city: {
                    required: true
                },
                additional_address: {
                    required: true
                },
                type: {
                    required: true
                },
                property_status: {
                    required: true
                },
                rooms: {
                    required: true,
                    number: true
                },
                garages: {
                    required: true,
                    number: true
                },
                bedroom: {
                    required: true,
                    number: true
                },
                bathroom: {
                    required: true,
                    number: true
                },
                area: {
                    required: true,
                    number: true
                },
                build_year: {
                    required: true,
                    number: true
                },
                "features[]": {
                    required: true
                }
            },
            messages: {
                title: {
                    required: "Property Title is required"
                },
                description: {
                    required: "Property Description is required"
                },
                price: {
                    required: "Property Price is required"
                },
                country: {
                    required: "Country is required"
                },
                state: {
                    required: "State is required"
                },
                corre_city: {
                    required: "City is required"
                },
                additional_address: {
                    required: "Address is required"
                },
                type: {
                    required: "Type is required"
                },
                property_status: {
                    required: "Status is required"
                },
                rooms: {
                    required: "Rooms is required"
                },
                garages: {
                    required: "Garages is required"
                },
                bedroom: {
                    required: "Bedroom is required"
                },
                bathroom: {
                    required: "Bathroom is required"
                },
                area: {
                    required: "Area is required"
                },
                build_year: {
                    required: "Build Year is required"
                },
                "features[]": {
                    required: "Features is required"
                }
            }
        });
    })
</script>