<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_sidebar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">Restate Property</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a>Welcome <span style="color: #fff"><?php echo ($this->session->userdata('displayname') && !empty($this->session->userdata('displayname'))) ? $this->session->userdata('displayname') : $this->session->userdata('first_name') . " " . $this->session->userdata('last_name'); ?>!</span></a></li>
                <li><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="<?php echo base_url('admin/logout') ?>">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div id="nav_sidebar" class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li id="dashboard" class="home-menu"><a href="<?php echo base_url('admin'); ?>">Dashboard</a></li>
                <li id="listing" class="home-menu"><a href="#">Listings</a>
                    <ul class="listing nav" style="display: none">
                        <li class="add_listing"><a href="<?php echo base_url('admin/add_property_listing'); ?>">Add Listing</a></li>
                        <li class="listing_info"><a href="<?php echo base_url('admin/listing'); ?>">All Listing</a></li>
                        <li class="featured_listing"><a href="<?php echo base_url('admin/featured_listing'); ?>">Featured Listing</a></li>
                    </ul>
                </li>
                <li id="listing_details" class="home-menu"><a href="#">Listing Details</a>
                    <ul class="listing_details nav" style="display: none">
                        <li class="add_listing_details"><a href="<?php echo base_url('admin/add_property_details'); ?>">Add Listing Details</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>