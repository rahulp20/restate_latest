$(document).ready(function() {
    $("#country select").on('change', function() {
        load_ajax_data('states', 'state_name', 'id', 'corre_state', 'country_id', $(this).val(), 'state');
        setTimeout(function() {
            $("#corr_state  select").on('change', function() {
                var match = $(this).find("option[value='" + $(this).val() + "']").text();
                load_ajax_data_city('city', 'Name', 'id', 'corre_city', 'District', match, 'corre_city');
            })
        }, 1000)
    })
})
function load_ajax_data(table_name, field1, field2, select_bar_name, base_key, selected_value, div_class) {
    $.ajax({
        url: load_locaion,
        type: 'POST',
        data: {value: selected_value, table_name: table_name, field1: field1, field2: field2, select_bar_name: select_bar_name, base_key: base_key},
        success: function(data) {
            $("#" + div_class).html(data);
        }
    });
}

function load_ajax_data_city(table_name, field1, field2, select_bar_name, base_key, selected_value, div_class) {
    $.ajax({
        url: load_location_city,
        type: 'POST',
        data: {value: selected_value, table_name: table_name, field1: field1, field2: field2, select_bar_name: select_bar_name, base_key: base_key},
        success: function(data) {
            $("#" + div_class).html(data);
            if ($("#city select option").length == '1')
            {

                $("#city select").append("<option value='" + $("#state").val() + "'>" + $("#state").find(":selected").text() + "</option>");
            }
        }
    });
}