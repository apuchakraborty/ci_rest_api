 <footer class="footer">
            

            <div class="container">
                <div class="footer-bottom">
                    <p class="footer-copyright">unisolARC &copy;  2018.  All Rights Reserved</p>

                    <!-- <img src="<?php echo base_url(); ?>assets/images/payments.png" alt="payment methods" class="footer-payments"> -->
                </div><!-- End .footer-bottom -->
            </div><!-- End .container -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                   <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="index.html">CDO (Kolkata)</a></li>
                            <li><a href="index.html">IPC-II (Kolkata)</a></li>
                            <li><a href="index.html">APPEMC (Kolkata)</a></li>
                            <li><a href="index.html">MCC (Suri)</a></li>
                            <li><a href="index.html">MSCD (Bolpur)</a></li>
                            <li><a href="index.html">RRI (Haringhata)</a></li>
                            <li><a href="index.html">OSD (Purulia)</a></li>
                            <li><a href="index.html">TDC (Siliguri)</a></li>
                            <li><a href="index.html">MBC (Siliguri)</a></li>
                            <li><a href="index.html">DIC (Burdwan)</a></li>
                            <li><a href="index.html">DCD (Burdwan)</a></li>
                            <li><a href="index.html">KKBD WC-II (Sabang)</a></li>
                            <li><a href="index.html">MDD (Baruipur)</a></li>
                            <li><a href="index.html">KC-I (Bankura)</a></li>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

     <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.js"></script>

    <!-- Main JS File -->
    <script src="<?php echo base_url(); ?>assets/js/main.min.js"></script>
    <script type="text/javascript">
      $('#filters').delegate('input[type=checkbox]', 'change', function() {
                    var $lis = $('.filtered-products > div'),
                        $checked = $('input:checked');
                    if ($checked.length)
                    {                           
                        var selector = '';
                        $($checked).each(function(index, element){                            
                            selector += "[class~='" + element.id + "']";                            
                        });                        
                        $lis.hide();                        
                        $('.filtered-products > div').filter(selector).show();             
                    }
                    else
                    {
                        $lis.show();
                    }
                });


      // dfs\
      $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

    </script>
</body>

<!-- Mirrored from portotheme.com/html/porto/demo-6/category-4col.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 08:29:54 GMT -->
</html>