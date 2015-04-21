</div>
<div class="animate footer">
    <div class="container">
        <div class="footer-inner">
            <div class="main"><p class="copyright">Copyright © 2012 - 2015. All Rights Reserved - <a href="<?php echo base_url(); ?>">Restate.com</a></p></div>
        </div>  
    </div>    
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-migrate-1.2.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/smoothscroll.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-select.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nouislider.all.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/fancybox.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/functions.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {

        wow = new WOW(
                {
                    animateClass: 'animated',
                    offset: 100
                }
        );
        wow.init();
    });


</script> 

<script type="text/javascript">
    $(document).ready(function() {
        var owl = $("#owl-demo");
        owl.owlCarousel({
            slideSpeed: 700,
            itemsCustom: [
                [0, 1],
                [450, 1],
                [600, 2],
                [700, 3],
                [1000, 4],
                [1200, 5],
                [1400, 6],
                [1600, 6]
            ],
            navigation: true

        });
    });

</script>
<!--[if lte IE 9]>
<script type="text/javascript" src="js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>