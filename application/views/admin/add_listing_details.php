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
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#front_details" aria-controls="front_details" role="tab" data-toggle="tab">Front Details</a></li>
                    <li role="presentation"><a href="#tablist" aria-controls="tablist" role="tab" data-toggle="tab">Tabs</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="front_details">
                        <form action="<?php echo base_url('admin/insert_property_details') ?>" method="post" name="section_form" id="section_form" enctype="multipart/form-data">
                            <br>
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
                            </div>
                            <input type="hidden" name="property_id" value="<?php echo (isset($property_id)) ? $property_id : '0' ?>"/>
                            <div class="panel-body col-md-12">
                                <?php
                                if (isset($section_data) && !empty($section_data)) {
                                    foreach ($section_data as $data) {
                                        echo add_section($data);
                                    }
                                }

                                function add_section($section = '') {
                                    ?>
                                    <div class="row" id="<?php echo (isset($section->id)) ? $section->id : "" ?>">
                                        <input type="hidden" name="section_id[]" value="<?php echo (isset($section->id)) ? $section->id : '0' ?>"/>
                                        <div class="form-group col-md-3">
                                            <div class="col-sm-12">
                                                <input class="form-control disabled" id="title" name="detail_text[]" placeholder="Text" value="<?php echo (isset($section->title)) ? $section->title : "" ?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="col-sm-12">
                                                <input class="form-control disabled" id="title" name="detail_link[]" placeholder="Link (Optional)" value="<?php echo (isset($section->link)) ? $section->link : "" ?>" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new " data-provides="fileinput">
                                                    <input  class="disabled" name="detail_image[]" value="<?php echo isset($section->image) ? $section->image : ''; ?>" type="hidden">
                                                    <span class="btn btn-danger btn-file ">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input name="detail_image[]" type="file" class="disabled">
                                                    </span>
                                                    <span class="fileinput-filename" ><?php echo isset($section->image) ? $section->image : ''; ?></span>
                                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="col-sm-8">
                                                <select class="form-control disabled" name="detail_status[]">
                                                    <option value="">--Status--</option>
                                                    <option value="1" <?php echo (isset($section->status) && $section->status == 1) ? "selected" : ""; ?>>Active</option>
                                                    <option value="0" <?php echo (isset($section->status) && $section->status == 0) ? "selected" : ""; ?>>Inactive</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="btn btn-danger" onclick="delete_row(this)" type="button" value="Remove">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="row">
                                    <input class="btn btn-info pull-right" onclick="add_details_row(this)" type="button" value="Add">
                                </div>
                            </div>
                        </form>
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
        $("#upload").click(function() {
            $("#document-block").modal('show');
        })
    })
    function add_details_row(curr) {
        new_row = "";
        new_row += "";
        new_row += '<div class="row">';
        new_row += '<div class="form-group col-md-3">';
        new_row += '<input type="hidden" name="section_id[]" value="0"/>';
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
        new_row += '<div class="fileinput fileinput-new " data-provides="fileinput">';
        new_row += '<input  class="disabled" name="detail_image[]" value="" type="hidden">';
        new_row += '<span class="btn btn-danger btn-file ">';
        new_row += '<span class="fileinput-new">Select file</span>';
        new_row += '<span class="fileinput-exists">Change</span>';
        new_row += '<input name="detail_image[]" type="file" class="disabled">';
        new_row += '</span>';
        new_row += '<span class="fileinput-filename" ></span>';
        new_row += '<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '<div class="form-group col-md-3">';
        new_row += '<div class="col-sm-8">';
        new_row += '<select class="form-control disabled"  name="detail_status[]">';
        new_row += '<option value="">--Status--</option>';
        new_row += '<option value="1">Active</option>';
        new_row += '<option value="0">Inactive</option>';
        new_row += '</select>';
        new_row += '</div>';
        new_row += '<div class="col-sm-4">';
        new_row += '<input class="btn btn-danger" onclick="delete_row(this)" type="button" value="Remove">';
        new_row += '</div>';
        new_row += '</div>';
        new_row += '</div>';
        $(curr).parent().before(new_row);
    }

    function delete_row(curr) {
        if (confirm("Are you sure you want to remove this section?")) {
            var id = $(curr).parents(".row").attr("id")
            $(curr).parents(".row").remove();
            if (typeof id != 'undefined') {
                $.ajax({
                    url: '<?php echo base_url() ?>admin/delete_section/' + id,
                    type: 'POST',
                    data: {"id": id},
                    success: function(r) {
                        if (r == "done") {
                            alert('Section deleted successfully');
                        } else {
                            alert('Something went wrong. Please try again');
                        }
                    }
                })
            } else {
                alert('Section deleted successfully');
            }
        }
    }
</script>