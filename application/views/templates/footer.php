<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.responsive.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.columnFilter.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-switch.js') ?>"></script>
<script src = "<?php echo base_url('assets/js/common.js'); ?>" ></script>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert').hide()
        }, 10000);

        $(".home-menu").click(function() {
            if (!$(this).hasClass("active")) {
                $(".home-menu ul").slideUp(100);
                $(this).addClass("active");
                $(this).find("ul").slideDown(100);
            }
        })
        var menu_active = '<?php echo (isset($menu_active) && !empty($menu_active)) ? $menu_active : ""; ?>';
        var root_active = '<?php echo (isset($root_active) && !empty($root_active)) ? $root_active : ""; ?>';
        $('.' + menu_active).addClass("active");
        $('.' + menu_active).parent().show()
        $('#' + root_active).addClass("active");
    });
</script>
</body>
</html>