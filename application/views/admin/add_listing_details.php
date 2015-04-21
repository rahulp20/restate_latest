<?php
$this->load->view('templates/leftpanel.php');
//echo "<pre>";print_r($listing_data);exit;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <ol class="breadcrumb bc-2">
        <li><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
        <li><a href="<?php echo base_url('admin/listing'); ?>">Listing Detail</a></li>
        <li class="active"><?php echo $action ?> Listing</li>
    </ol>    
    <?php if (isset($system_message)) echo $system_message; ?>
    <div class="panel-body col-md-12">
        <div class="panel-primary">
            <div class="panel-heading">
                <div class="button-action pull-right" style="margin-top: -5px">
                    <input id="save_guest" class="btn btn-danger " name="save_contact" value="Save" type="submit">
                    <a href="<?php echo base_url('admin/listing') ?>"><input id="cancel" class="btn btn-danger " data-enable-readonly="true" value="Cancel" type="button"></a>
                </div>
                <div class="panel-title">
                    Property Detailed Information
                </div>
            </div>
            <br>
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#front_details" aria-controls="front_details" role="tab" data-toggle="tab">Front Details</a></li>
                    <li role="presentation"><a href="#tablist" aria-controls="tablist" role="tab" data-toggle="tab">Tabs</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="front_details">
                        <div class="panel-body col-md-12">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12">
                                        <input class="form-control disabled" id="title" name="detail_text[]" placeholder="Text" value="" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12">
                                        <input class="form-control disabled" id="title" name="detail_link[]" placeholder="Link (Optional)" value="" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12">
                                        <input class="form-control disabled" id="title" name="detail_image[]" placeholder="Image" value="" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="col-sm-12">
                                        <input class="form-control disabled" id="title" name="title" placeholder="Property Title" value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input class="btn btn-info pull-right" onclick="add_details_row(this)" type="button" value="Add">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tablist">
                        <br/>
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Tab1</a></li>
                            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Tab2</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <div class="panel-body col-md-12">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <div class="panel-body col-md-12">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var load_locaion = '<?php echo base_url('admin/load_location') ?>';
    var load_location_city = '<?php echo base_url('admin/load_location_city') ?>';

    $(document).ready(function() {

    })
    function add_details_row(curr) {
        new_row = "";
        new_row += "";
        new_row += '<div class="row">';
        new_row += '<div class="form-group col-md-3">';
        new_row += '<div class="col-sm-12">';
        new_row += '<input class="form-control disabled" id="title" name="detail_text[]" placeholder="Text" value="" type="text">';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '<div class="form-group col-md-3">';
        new_row += '<div class="col-sm-12">';
        new_row += '<input class="form-control disabled" id="title" name="detail_link[]" placeholder="Link (Optional)" value="" type="text">';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '<div class="form-group col-md-3">';
        new_row += '<div class="col-sm-12">';
        new_row += '<input class="form-control disabled" id="title" name="detail_image[]" placeholder="Image" value="" type="text">';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '<div class="form-group col-md-3">';
        new_row += '<div class="col-sm-12">';
        new_row += '<input class="form-control disabled" id="title" name="title" placeholder="Property Title" value="" type="text">';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '</div>';
        $(curr).parent().prev().after(new_row)
    }
</script>