<?php $this->load->view('templates/leftpanel.php'); ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Dashboard</h1>
    <?php if (isset($system_message)) echo $system_message; ?>
    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <a href="#">
                <div class="dashboard_box">
                    <h4>Property Added</h4>
                    <span class="property_count">25</span>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <a href="#"><div class="dashboard_box">
                    <h4>Active Property</h4>
                    <span class="property_count">10</span>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <a href="#">
                <div class="dashboard_box">
                    <h4>Inactive Property</h4>
                    <span class="property_count">15</span>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <a href="#">
                <div class="dashboard_box">
                    <h4>Recently Added</h4>
                    <span class="property_count">5</span>
                </div>
            </a>
        </div>
    </div>
</div>
