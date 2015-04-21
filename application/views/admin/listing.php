<?php $this->load->view('templates/leftpanel.php'); ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <ol class="breadcrumb bc-2">
        <li><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
        <li class="active"><a href="<?php echo base_url('admin/listing'); ?>"><?php echo $page; ?> Listing</a></li>
    </ol>
    <?php if (isset($system_message)) echo $system_message; ?>
    <div class="button-action pull-right">
        <a href="<?php echo base_url('admin/add_property_listing') ?>"><input id="cancel" class="btn btn-danger " data-enable-readonly="true" value="Add" type="button"></a>
    </div>
    <div class="panel-body dataTables_wrapper form-inline table-responsive color-table tab-pane active" id="enqueries">
        <table id="listing_table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr class="table-search-head">
                    <th width="5%"></th>
                    <th width="10%">ID</th>
                    <th width="15%">Title</th>
                    <th width="25%">Desciption</th>
                    <th width="10%">IsFeatured</th>
                    <th width="10%">Status</th>
                    <th width="15%">Created Date</th>
                </tr>
                <tr class="table-head">
                    <th width="5%"><input type='checkbox' class="check-all" name='contact_ids[]'></th>
                    <th width="10%">ID</th>
                    <th width="15%">Title</th>
                    <th width="25%">Desciption</th>
                    <th width="10%">IsFeatured</th>
                    <th width="10%">Status</th>
                    <th width="15%">Created Date</th>
                </tr>
            </thead>
            <tboby></tboby>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var listing_table = $('#listing_table').dataTable({
            "bServerSide": true,
            "sAjaxSource": '<?php echo site_url('datatable_loading/load_listing') ?>',
//            'fnRowCallback': function(aoData, aData, i) {
//                if ($(aData[2]).attr('class') == 'active')
//                {
//                    $(aoData).addClass('read_contact')
//                }
//                if (i == 0) {
//                    checkbox_select();
//                }
//            },
            "bFilter": true,
            "iDisplayLength": 10,
            "bLengthChange": false,
            "sDom": 'rt<"bottom"ilp>',
            "bAutoWidth": false,
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, 'All']],
            "fnServerParams": function(aoData) {
                aoData.push({name: "aAlphaSearch", value: $("#alphaSearch").val()});
            },
            "aaSorting": [[1, 'desc']],
            "aoColumns": [
                {"bSortable": false},
                null,
                null,
                null,
                null,
                null,
                null,
            ]
        });

        listing_table.columnFilter({
            aoColumns: [
                null,
                null,
                {type: "text"},
                {type: "text"},
                {type: "text"},
            ],
            "sPlaceHolder": "head:after"
        });

        $(".searchAlphabet").on('click', function() {
            $("#alphaSearch").val(($(this).attr('value')));
            listing_table.fnDraw();
        });

        setTimeout(function() {
            $('#listing_table input').css("width", "100%");
        }, 500)
    });
</script>